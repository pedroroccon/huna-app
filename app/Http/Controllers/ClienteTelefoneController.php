<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\ClienteTelefone;
use Illuminate\Http\Request;

class ClienteTelefoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Cliente $cliente)
    {
        $telefones = $cliente->telefones()->paginate();
        return view('cliente.telefone.index', compact('cliente', 'telefones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Cliente $cliente)
    {
        return view('cliente.telefone.create', compact('cliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Cliente $cliente)
    {
        $telefone = (new ClienteTelefone)->fill($request->all());
        $cliente->telefones()->save($telefone);

        return redirect($telefone->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClienteTelefone  $telefone
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente, ClienteTelefone $telefone)
    {
        return view('cliente.telefone.show', compact('cliente', 'telefone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente_telefone  $telefone
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente, ClienteTelefone $telefone)
    {
        return view('cliente.telefone.edit', compact('cliente', 'telefone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClienteTelefone  $telefone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente, ClienteTelefone $telefone)
    {
        $telefone->fill($request->all());
        $telefone->update();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClienteTelefone  $telefone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente, ClienteTelefone $telefone)
    {
        $telefone->delete();
        return back();
    }
}
