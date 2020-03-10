@extends('hive::layouts.main')
@section('title', 'Adicionar - Clientes')
@section('content')

<!-- Header -->
@include('hive::components.title', ['page_title' => 'Adicionar - Clientes'])

<!-- Breadcrumbs -->
@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('cliente-create')])

{!! Form::open(['url' => config('hello.url') . '/cliente', 'method' => 'post', 'class' => 'hello-form']) !!}
	@include('cliente.partials.form', ['submit_button_text' => 'Salvar cliente'])
{!! Form::close() !!}

@endsection
