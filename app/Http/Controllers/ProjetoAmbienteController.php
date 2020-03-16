<?php

namespace App\Http\Controllers;

use App\Projeto;
use App\ProjetoAmbiente;
use App\ProjetoAmbienteEtapa;
use Illuminate\Http\Request;

class ProjetoAmbienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Projeto $projeto)
    {
        $ambientes = $projeto->ambientes()->ordenado()->paginate();
        return view('projeto.ambiente.index', compact('projeto', 'ambientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Projeto $projeto)
    {
        return view('projeto.ambiente.create', compact('projeto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Projeto $projeto)
    {
        $quantidade = $request->has('quantidade') ? $request->quantidade : 1;

        for ($i = 1; $i <= $quantidade; $i++) {
            $ambiente = (new ProjetoAmbiente)->fill($request->all());
            $ambiente->nome = $ambiente->nome . ' #' . $i;
            $ambiente = $projeto->ambientes()->save($ambiente);
        }

        return redirect($projeto->path() . '/ambiente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProjetoAmbiente  $ambiente
     * @return \Illuminate\Http\Response
     */
    public function show(Projeto $projeto, ProjetoAmbiente $ambiente)
    {
        $etapas = $ambiente->etapas;
        return view('projeto.ambiente.show', compact('projeto', 'ambiente', 'etapas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProjetoAmbiente  $ambiente
     * @return \Illuminate\Http\Response
     */
    public function edit(Projeto $projeto, ProjetoAmbiente $ambiente)
    {
        return view('projeto.ambiente.edit', compact('projeto', 'ambiente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProjetoAmbiente  $ambiente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projeto $projeto, ProjetoAmbiente $ambiente)
    {
        $ambiente->fill($request->all());
        $ambiente->update();

        return redirect($ambiente->path());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProjetoAmbiente  $ambiente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projeto $projeto, ProjetoAmbiente $ambiente)
    {
        $ambiente->delete();
        return back();
    }
}
