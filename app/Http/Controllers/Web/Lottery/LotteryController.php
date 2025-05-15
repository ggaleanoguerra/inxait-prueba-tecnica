<?php

namespace App\Http\Controllers\Web\Lottery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lottery;
use App\Models\LotteryParticipant;
use App\Models\Participant;
use App\Models\LotteryWinner;
use App\Exports\ParticipantsExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Str;


class LotteryController extends Controller
{
    public function index()
    {
        $entities = Lottery::orderBy('created_at', 'desc')->paginate(10);
        return view('pages.lottery.index', compact('entities'));
    }

    public function participants($id)
    {
        $entities = LotteryParticipant::where('lottery_id', $id)->paginate(10);
        $lottery = Lottery::findOrFail($id);

        return view('pages.lottery.participants.index', compact('entities', 'lottery'));
    }

    public function setWinner($id)
    {
        $lottery = Lottery::findOrFail($id);

        // Check if lottery is active
        if (!$lottery->active) {
            return redirect()->back()->with([
                'swal' => [
                    'status' => 'warning',
                    'title' => 'Sorteo inactivo',
                    'message' => 'El sorteo debe estar activo para seleccionar un ganador.'
                ]
            ]);
        }

        $participantCount = LotteryParticipant::where('lottery_id', $id)->count();

        if ($participantCount < 5) {
            return redirect()->back()->with([
                'swal' => [
                    'status' => 'warning',
                    'title' => 'No hay suficientes participantes',
                    'message' => 'Debe haber al menos 5 participantes en el sorteo para seleccionar un ganador.'
                ]
            ]);
        }

        $winner = LotteryParticipant::where('lottery_id', $id)->inRandomOrder()->first();

        if ($winner) {
            $lottery->active = false;
            $lottery->save();

         $winnerEntity = LotteryWinner::create([
                'lottery_id' => $lottery->id,
                'participant_id' => $winner->id,
            ]);
        }

        return redirect()->route('lottery.winner', ['id' => $lottery->id, 'winner_id' => $winnerEntity->id]);
    }

    public function setStatus(Request $request)
    {
        $lottery = Lottery::findOrFail($request->id);
        $lottery->active = !$lottery->active;
        $lottery->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Estado actualizado correctamente.',
            'active' => $lottery->active,
        ]);
    }

    public function downloadParticipants($id)
    {
        $lottery = Lottery::findOrFail($id);
        $participants = LotteryParticipant::with(['participant.departamento', 'participant.municipio'])
            ->where('lottery_id', $id)
            ->get();

        $filename = 'participantes_' . Str::slug($lottery->name) . '.xlsx';

        return Excel::download(new ParticipantsExport($participants, $lottery), $filename);
    }
    public function winner($id, $winner_id)
    {
        $lottery = Lottery::findOrFail($id);
        $winner = LotteryWinner::where('id', $winner_id)->get();

        return view('pages.lottery.winners.winner', compact('lottery', 'winner'));
    }
    public function getWinners($id)
    {
        $lottery = Lottery::findOrFail($id);
        $winners = LotteryWinner::where('lottery_id', $id)->with(['participant'])->get();

        return view('pages.lottery.winners.winners', compact('lottery', 'winners'));
    }

    public function create()
    {
        return view('pages.lottery.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'active' => 'required|boolean',
        ]);

        if ($request->active) {
            Lottery::where('active', true)->update(['active' => false]);
        }

        Lottery::create($request->all());

        return redirect()->route('lotteries.index')->with([
            'swal' => [
                'status' => 'success',
                'title' => 'Sorteo creado',
                'message' => 'El sorteo ha sido creado correctamente.'
            ]
        ]);
    }

    public function edit($id)
    {
        $entity = Lottery::findOrFail($id);
        return view('pages.lottery.edit', compact('entity'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'active' => 'required|boolean',
        ]);

        $lottery = Lottery::findOrFail($id);

        if ($request->active) {
            Lottery::where('id', '!=', $id)->update(['active' => false]);
        }

        $lottery->update($request->all());

        return redirect()->route('lotteries.index')->with([
            'swal' => [
                'status' => 'success',
                'title' => 'Sorteo actualizado',
                'message' => 'El sorteo ha sido actualizado correctamente.'
            ]
        ]);
    }


}
