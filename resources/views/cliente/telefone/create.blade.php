@extends('hive::layouts.main')
@section('title', 'Adicionar - Telefone - ' . $cliente->nome . ' - Clientes')
@section('content')

<!-- Header -->
@include('hive::components.title', ['page_title' => 'Adicionar - Telefone - ' . $cliente->nome . ' - Clientes'])

<!-- Breadcrumbs -->
@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('cliente-telefone-create', $cliente)])

{!! Form::open(['url' => $cliente->path() . '/telefone', 'method' => 'post', 'class' => 'hello-form']) !!}
	@include('cliente.telefone.partials.form', ['submit_button_text' => 'Salvar telefone'])
{!! Form::close() !!}

@endsection
