@extends('hive::layouts.main')
@section('title', 'Adicionar - Responsáveis')
@section('content')

<!-- Header -->
@include('hive::components.title', ['page_title' => 'Adicionar - Responsáveis'])

<!-- Breadcrumbs -->
@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('responsavel-create')])

	{!! Form::open(['url' => config('hello.url') . '/responsavel', 'method' => 'post', 'class' => 'hello-form']) !!}
		@include('responsavel.partials.form', ['submit_button_text' => 'Salvar'])
	{!! Form::close() !!}

@endsection
