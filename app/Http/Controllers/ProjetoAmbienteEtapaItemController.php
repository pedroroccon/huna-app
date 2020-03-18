<?php

namespace App\Http\Controllers;

use App\Projeto;
use App\ProjetoAmbiente;
use App\ProjetoAmbienteEtapa;
use App\ProjetoAmbienteEtapaItem;
use Illuminate\Http\Request;

class ProjetoAmbienteEtapaItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Projeto $projeto, ProjetoAmbiente $ambiente, ProjetoAmbienteEtapa $etapa)
    {
        $itens = $etapa->itens()->ordenado()->paginate();
        return view('projeto.ambiente.etapa.item.index', compact('projeto', 'ambiente', 'etapa', 'itens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Projeto $projeto, ProjetoAmbiente $ambiente, ProjetoAmbienteEtapa $etapa)
    {
        return view('projeto.ambiente.etapa.item.create', compact('projeto', 'ambiente', 'etapa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Projeto $projeto, ProjetoAmbiente $ambiente, ProjetoAmbienteEtapa $etapa)
    {
        $item = (new ProjetoAmbienteEtapaItem)->fill($request->all());
        $etapa->itens()->save($item);

        return redirect($item->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProjetoAmbienteEtapa  $projetoAmbienteEtapa
     * @return \Illuminate\Http\Response
     */
    public function show(Projeto $projeto, ProjetoAmbiente $ambiente, ProjetoAmbienteEtapa $etapa, ProjetoAmbienteEtapaItem $item)
    {
        return view('projeto.ambiente.etapa.item.show', compact('projeto', 'ambiente', 'etapa', 'item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProjetoAmbienteEtapa  $projetoAmbienteEtapa
     * @return \Illuminate\Http\Response
     */
    public function edit(Projeto $projeto, ProjetoAmbiente $ambiente, ProjetoAmbienteEtapa $etapa, ProjetoAmbienteEtapaItem $item)
    {
        return view('projeto.ambiente.etapa.item.edit', compact('projeto', 'ambiente', 'etapa', 'item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProjetoAmbienteEtapa  $projetoAmbienteEtapa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projeto $projeto, ProjetoAmbiente $ambiente, ProjetoAmbienteEtapa $etapa, ProjetoAmbienteEtapaItem $item)
    {
        $item->fill($request->all());
        $item->update();

        return redirect($item->path());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProjetoAmbienteEtapa  $projetoAmbienteEtapa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projeto $projeto, ProjetoAmbiente $ambiente, ProjetoAmbienteEtapa $etapa, ProjetoAmbienteEtapaItem $item)
    {
        $item->delete();
        return back();
    }

    public function concluir(Request $request, Projeto $projeto, ProjetoAmbiente $ambiente, ProjetoAmbienteEtapa $etapa, ProjetoAmbienteEtapaItem $item)
    {
        $item->concluir();
        request()->session()->flash('flash_success', 'Item ' . $item->titulo . ' concluído com sucesso na etapa ' . $etapa->nome);
        return back();
    }

    public function desconcluir(Request $request, Projeto $projeto, ProjetoAmbiente $ambiente, ProjetoAmbienteEtapa $etapa, ProjetoAmbienteEtapaItem $item)
    {
        $item->desconcluir();
        request()->session()->flash('flash_alert', 'Item ' . $item->titulo . ' desconcluído com sucesso na etapa ' . $etapa->nome);
        return back();
    }

}
