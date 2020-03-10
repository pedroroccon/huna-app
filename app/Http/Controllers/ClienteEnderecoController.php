<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\ClienteEndereco;
use Illuminate\Http\Request;

class ClienteEnderecoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Cliente $cliente)
    {
        $enderecos = $cliente->enderecos()->paginate();
        return view('cliente.endereco.index', compact('cliente', 'enderecos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Cliente $cliente)
    {
        return view('cliente.endereco.create', compact('cliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Cliente $cliente)
    {
        $endereco = (new ClienteEndereco)->fill($request->all());
        $cliente->enderecos()->save($endereco);

        return redirect($endereco->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClienteEndereco  $endereco
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente, ClienteEndereco $endereco)
    {
        return view('cliente.endereco.show', compact('cliente', 'endereco'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente_endereco  $endereco
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente, ClienteEndereco $endereco)
    {
        return view('cliente.endereco.edit', compact('cliente', 'endereco'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClienteEndereco  $endereco
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente, ClienteEndereco $endereco)
    {
        $endereco->fill($request->all());
        $endereco->update();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClienteEndereco  $endereco
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente, ClienteEndereco $endereco)
    {
        $endereco->delete();
        return back();
    }
}
