@extends('hive::layouts.main')
@section('title', 'Editar - ' . $telefone->fone . ' - Telefones - ' . $cliente->nome . ' - Clientes')
@section('content')

<!-- Header -->
@include('hive::components.title', ['page_title' => 'Editar - ' . $telefone->fone . ' - Telefones - ' . $cliente->nome . ' - Clientes'])

<!-- Breadcrumbs -->
@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('cliente-telefone-edit', $cliente, $telefone)])

{!! Form::model($telefone, ['url' => $telefone->path(), 'method' => 'patch', 'class' => 'hello-form']) !!}
	@include('cliente.telefone.partials.form', ['submit_button_text' => 'Salvar telefone'])
{!! Form::close() !!}

@endsection
