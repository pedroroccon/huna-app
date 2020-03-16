<?php

namespace App\Http\Controllers;

use App\Projeto;
use App\ProjetoAmbiente;
use App\ProjetoAmbienteEtapa;
use Illuminate\Http\Request;

class ProjetoAmbienteEtapaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProjetoAmbienteEtapa  $projetoAmbienteEtapa
     * @return \Illuminate\Http\Response
     */
    public function show(ProjetoAmbienteEtapa $projetoAmbienteEtapa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProjetoAmbienteEtapa  $projetoAmbienteEtapa
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjetoAmbienteEtapa $projetoAmbienteEtapa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProjetoAmbienteEtapa  $projetoAmbienteEtapa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjetoAmbienteEtapa $projetoAmbienteEtapa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProjetoAmbienteEtapa  $projetoAmbienteEtapa
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjetoAmbienteEtapa $projetoAmbienteEtapa)
    {
        //
    }

    public function iniciar(Request $request, Projeto $projeto, ProjetoAmbiente $ambiente, ProjetoAmbienteEtapa $etapa)
    {
        if ( empty($etapa->responsavel_id)) { return back()->withErrors(['Por favor, indique um responsável por esta etapa antes de apontar o horário.']); }
        
        $request->validate([
            'inicio_em' => 'required|date',     
        ]);

        $etapa->iniciar($request->iniciar_em);

        request()->session()->flash('flash_success', 'Etapa ' . $etapa->nome . ' iniciada com sucesso!');
        return back();
    }
    
    public function encerrar(Request $request, Projeto $projeto, ProjetoAmbiente $ambiente, ProjetoAmbienteEtapa $etapa)
    {
        if ( empty($etapa->responsavel_id)) { return back()->withErrors(['Por favor, indique um responsável por esta etapa antes de apontar o horário.']); }

        $request->validate([
            'termino_em' => 'required|date', 
        ]);

        $etapa->encerrar($request->encerrar_em);

        request()->session()->flash('flash_success', 'Etapa ' . $etapa->nome . ' encerrada com sucesso!');
        return back();
    }

    public function responsavel(Request $request, Projeto $projeto, ProjetoAmbiente $ambiente, ProjetoAmbienteEtapa $etapa)
    {
        $etapa->responsavel_id = $request->responsavel_id;
        $etapa->update();

        request()->session()->flash('flash_success', 'Responsável atrelado com sucesso na etapa ' . $etapa->nome);
        return back();
    }
}
