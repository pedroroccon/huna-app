@extends('hive::layouts.main')
@section('title', 'Editar - ' . $endereco->titulo . ' - Endereços - ' . $cliente->nome . ' - Clientes')
@section('content')

<!-- Header -->
@include('hive::components.title', ['page_title' => 'Editar - ' . $endereco->titulo . ' - Endereços - ' . $cliente->nome . ' - Clientes'])

<!-- Breadcrumbs -->
@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('cliente-endereco-edit', $cliente, $endereco)])

{!! Form::model($endereco, ['url' => $endereco->path(), 'method' => 'patch', 'class' => 'hello-form']) !!}
	@include('cliente.endereco.partials.form', ['submit_button_text' => 'Salvar endereço'])
{!! Form::close() !!}

@endsection
