<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect(config('hello.url'));
});

Route::group(['prefix' => config('hello.url'), 'middleware' => ['web', 'auth']], function () {

    Route::get('/', function() {
        return view('hive.dashboard');
    });

    Route::resource('cliente/{cliente}/endereco', 'ClienteEnderecoController');
    Route::resource('cliente/{cliente}/email', 'ClienteEmailController');
    Route::resource('cliente/{cliente}/telefone', 'ClienteTelefoneController');
    Route::resource('cliente', 'ClienteController');

    // Responsáveis
    Route::resource('responsavel', 'ResponsavelController');

    // Projetos, relatórios
    Route::match(['get', 'post'], 'projeto/relatorio/visao-geral', 'ProjetoRelatorioController@visaoGeral');

    // Projetos
    Route::post('projeto/{projeto}/ambiente/{ambiente}/etapa/{etapa}/iniciar', 'ProjetoAmbienteEtapaController@iniciar');
    Route::post('projeto/{projeto}/ambiente/{ambiente}/etapa/{etapa}/encerrar', 'ProjetoAmbienteEtapaController@encerrar');
    Route::post('projeto/{projeto}/ambiente/{ambiente}/etapa/{etapa}/responsavel', 'ProjetoAmbienteEtapaController@responsavel');
    Route::match(['get', 'post'], 'projeto/{projeto}/ambiente/{ambiente}/etapa/{etapa}/item/{item}/desconcluir', 'ProjetoAmbienteEtapaItemController@desconcluir');
    Route::match(['get', 'post'], 'projeto/{projeto}/ambiente/{ambiente}/etapa/{etapa}/item/{item}/concluir', 'ProjetoAmbienteEtapaItemController@concluir');
    Route::resource('projeto/{projeto}/ambiente/{ambiente}/etapa/{etapa}/item', 'ProjetoAmbienteEtapaItemController');
    Route::resource('projeto/{projeto}/ambiente/{ambiente}/etapa', 'ProjetoAmbienteEtapaController');
    Route::resource('projeto/{projeto}/ambiente', 'ProjetoAmbienteController');
    Route::resource('projeto', 'ProjetoController');

    // Ambientes
    Route::resource('ambiente', 'AmbienteController');

});

Route::get('/home', 'HomeController@index')->name('home');