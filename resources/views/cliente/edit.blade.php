@extends('hive::layouts.main')
@section('title', 'Editar - ' . $cliente->nome . ' - Clientes')
@section('content')

<!-- Header -->
@include('hive::components.title', ['page_title' => 'Editar - ' . $cliente->nome . ' - Clientes'])

<!-- Breadcrumbs -->
@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('cliente-edit', $cliente)])

{!! Form::model($cliente, ['url' => $cliente->path(), 'method' => 'patch', 'class' => 'hello-form']) !!}
	@include('cliente.partials.form', ['submit_button_text' => 'Salvar cliente'])
{!! Form::close() !!}

@endsection
