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
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('ambiente/{ambiente}/ambiente_tipo', 'AmbienteTipoController');
Route::resource('ambiente', 'AmbienteController');

Route::resource('etapa/{etapa}/etapa_tipo', 'EtapaTipoController');
Route::resource('etapa/{etapa}/responsavel', 'ResponsavelController');
Route::resource('Etapa', 'EtapaController');

Route::resource('cliente/{cliente}/endereco', 'ClienteEnderecoController');
Route::resource('cliente/{cliente}/email', 'ClienteEmailController');
Route::resource('cliente/{cliente}/telefone', 'ClienteTelefoneController');
Route::resource('cliente', 'ClienteController');

Route::resource('projeto/{projeto}/ambiente', 'AmbienteController');
Route::resource('projeto', 'ProjetoController');

Route::resource('responsavel', 'ResponsavelController');
Route::resource('etapa_tipo', 'EtapaTipoController');
Route::resource('ambiente_tipo', 'AmbienteTipoController');
