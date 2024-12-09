<?php

namespace App\Http\Controllers;

use App\Http\Requests\DTOs\ClimateDTO;
use App\Models\Climate;
use Illuminate\Http\Request;
use Log;

class ClimateController extends Controller
{
    public function index() {
        return view('climate.index');
    }

    public function visualize(Request $request) {
        $climate = new ClimateDTO();
        $climate->cidade = $request->input('cidade');
        $climate->cobertura_nuvens = $request->input('cobertura_nuvens');
        $climate->data_hora_pesquisa = $request->input('data_hora_pesquisa');
        $climate->iconeTempo = $request->input('iconeTempo');
        $climate->precipitacao = $request->input('precipitacao');
        $climate->pressao = $request->input('pressao');
        $climate->sensacao = $request->input('sensacao');
        $climate->temperatura = $request->input('temperatura');
        $climate->velocidade_vento = $request->input('velocidade_vento');
        $climate->visibilidade = $request->input('visibilidade');
        $climate->umidade = $request->input('umidade');
        return view('climate.visualize', compact('climate'));
    }

    public function create(Request $request) {
        $climate = $request->input('climate');
        Climate::create($climate);
        return response()->json(["msgResult" => "Dados salvos com sucesso!"]);
    }
}
