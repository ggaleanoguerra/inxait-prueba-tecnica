<?php

namespace App\Http\Controllers\Web\Welcome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pais;
use App\Models\Departamento;
use App\Models\Municipio;
use App\Models\Lottery;
use App\Models\LotteryWinner;

class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        $paises = Pais::all();
        $departamentos = Departamento::all();
        $municipios = Municipio::all();

        $lottery = Lottery::where('active', true)->first();
        $winner = null;

        if (!$lottery) {
            $winner = LotteryWinner::latest()->first();
        }

        return view('welcome', compact('paises', 'departamentos', 'municipios', 'winner', 'lottery'));
    }

    public function getMunicipios($id)
    {
        $municipios = Municipio::where('departamento_id', $id)
                                ->get(['id', 'name']);

        return response()->json($municipios);
    }
}
