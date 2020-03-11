<?php

namespace App\Http\Controllers;

use App\Projeto;
use App\ProjetoAmbiente;
use App\Ambiente;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projetos = Projeto::withCount('ambientes')->paginate();
        return view('projeto.index', compact('projetos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projeto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $projeto = new Projeto;
        $projeto->fill($request->all());
        $projeto->save();
        
        foreach($request->ambiente as $id => $quantidade) {

            // Verificamos pela quantidade se será necessário
            // adicionar o ambiente.
            if ($quantidade > 0) {

                // Retornamos todos os ambientes cadastrados
                $ambientesCadastrados = Ambiente::all();

                // Para cada quantidade, devemos criar um 
                // ambiente, ou seja, 2 banheiros, 2 quartos, 
                // 1 cozinha, etc...
                for ($i = 1; $i <= $quantidade; $i++) {
                    $ambienteNome = $ambientesCadastrados->find($id);
                    $nome = ! empty($ambienteNome) ? $ambienteNome->nome : 'Ambiente não definido';
                    $projeto->ambientes()->save(new ProjetoAmbiente([
                        'nome' =>  $nome . ' #' . $i, 
                        'descricao' => 'Ambiente cadastrado para o projeto ' . $projeto->nome, 
                    ]));
                }
            }
        }

        return redirect(config('hello.url') . '/projeto');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function show(Projeto $projeto)
    {
        return view('projeto.show', compact('projeto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function edit(Projeto $projeto)
    {
        return view('projeto.edit', compact('projeto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projeto $projeto)
    {
        $projeto->fill($request->all());
        $projeto->update();

        return redirect(config('hello.url') . '/projeto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projeto $projeto)
    {
        $projeto->delete();
        return back();
    }
}
