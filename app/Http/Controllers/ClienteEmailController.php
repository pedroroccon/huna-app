<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\ClienteEmail;
use Illuminate\Http\Request;

class ClienteEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Cliente $cliente)
    {
        $emails = $cliente->emails()->paginate();
        return view('cliente.email.index', compact('cliente', 'emails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Cliente $cliente)
    {
        return view('cliente.email.create', compact('cliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Cliente $cliente)
    {
        $email = (new ClienteEmail)->fill($request->all());
        $cliente->emails()->save($email);

        return redirect($email->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClienteEmail  $email
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente, ClienteEmail $email)
    {
        return view('cliente.email.show', compact('cliente', 'email'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente_email  $email
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente, ClienteEmail $email)
    {
        return view('cliente.email.edit', compact('cliente', 'email'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClienteEmail  $email
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente, ClienteEmail $email)
    {
        $email->fill($request->all());
        $email->update();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClienteEmail  $email
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente, ClienteEmail $email)
    {
        $email->delete();
        return back();
    }
}
