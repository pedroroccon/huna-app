@extends('hive::layouts.main')
@section('title', 'Adicionar - Endereço - ' . $cliente->nome . ' - Clientes')
@section('content')

<!-- Header -->
@include('hive::components.title', ['page_title' => 'Adicionar - Endereço - ' . $cliente->nome . ' - Clientes'])

<!-- Breadcrumbs -->
@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('cliente-endereco-create', $cliente)])

{!! Form::open(['url' => $cliente->path() . '/endereco', 'method' => 'post', 'class' => 'hello-form']) !!}
	@include('cliente.endereco.partials.form', ['submit_button_text' => 'Salvar endereço'])
{!! Form::close() !!}

@endsection
