@extends('hive::layouts.main')
@section('title', 'Adicionar - E-mail - ' . $cliente->nome . ' - Clientes')
@section('content')

<!-- Header -->
@include('hive::components.title', ['page_title' => 'Adicionar - E-mail - ' . $cliente->nome . ' - Clientes'])

<!-- Breadcrumbs -->
@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('cliente-email-create', $cliente)])

{!! Form::open(['url' => $cliente->path() . '/email', 'method' => 'post', 'class' => 'hello-form']) !!}
	@include('cliente.email.partials.form', ['submit_button_text' => 'Salvar e-mail'])
{!! Form::close() !!}

@endsection
