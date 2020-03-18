<?php

namespace App\Http\Controllers;

use App\Projeto;
use Illuminate\Http\Request;

class ProjetoRelatorioController extends Controller
{

    public function visaoGeral(Request $request)
    {
        $projetos = Projeto::orderBy('dt_prev_entrega')->get();
        return view('projeto.relatorio.visao-geral.index', compact('projetos'));
    }

}
