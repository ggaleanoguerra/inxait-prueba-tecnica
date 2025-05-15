<?php

namespace App\Http\Controllers\Web\Participant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Participant;
use App\Models\LotteryParticipant;
use App\Models\LotteryWinner;
use App\Models\Lottery;
use App\Exports\AllParticipantsExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Str;

use DB;

class ParticipantController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:participants',
            'phone' => 'required|digits_between:7,20',
            'document_identification' => 'required|digits_between:7,20',
            'departamento_id' => 'required|exists:departamentos,id',
            'municipio_id' => 'required|exists:municipios,id',
            'data_authorization' => 'required|in:on'
        ]);

        try {
            DB::beginTransaction();

            $lottery = Lottery::where('active', true)->first();

            if (!$lottery) {
                DB::rollBack();
                return redirect()->back()->with('swal', [
                    'status' => 'error',
                    'message' => 'No hay un sorteo activo en este momento.',
                    'title' => '¡Error!',
                ]);
            }

            $participant = Participant::where('document_identification', $validated['document_identification'])->first();

            if ($participant) {
                $hasParticipatedBefore = LotteryParticipant::where('participant_id', $participant->id)->exists();
                $alreadyRegisteredInCurrent = LotteryParticipant::where('participant_id', $participant->id)
                    ->where('lottery_id', $lottery->id)
                    ->exists();

                if ($hasParticipatedBefore && !$alreadyRegisteredInCurrent) {
                    LotteryParticipant::create([
                        'participant_id' => $participant->id,
                        'lottery_id' => $lottery->id,
                    ]);

                    DB::commit();

                    return redirect()->back()->with('swal', [
                        'status' => 'success',
                        'message' => '¡Ya estabas registrado en otra lotería! Ahora participas en el nuevo sorteo.',
                        'title' => '¡Éxito!',
                    ]);
                }

                if ($alreadyRegisteredInCurrent) {
                    DB::commit();

                    return redirect()->back()->with('swal', [
                        'status' => 'success',
                        'message' => '¡Ya estabas registrado en este sorteo!',
                        'title' => '¡Éxito!',
                    ]);
                }

            }

            if (!$participant) {
                $participant = Participant::create($validated);
            }

            LotteryParticipant::create([
                'participant_id' => $participant->id,
                'lottery_id' => $lottery->id,
            ]);

            DB::commit();

            return redirect()->back()->with('swal', [
                'status' => 'success',
                'message' => '¡Te has registrado correctamente!',
                'title' => '¡Éxito!',
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('swal', [
                'status' => 'error',
                'message' => 'Ocurrió un error al registrar el participante. Intenta nuevamente.',
                'title' => '¡Error!',
            ]);
        }
    }

    public function downloadAllParticipants()
    {
        $participants = Participant::with(['departamento', 'municipio'])->get();

        return Excel::download(
            new AllParticipantsExport($participants),
            'todos_los_participantes_' . now()->format('Ymd_His') . '.xlsx'
        );
    }



}
