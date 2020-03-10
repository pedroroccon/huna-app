@extends('hive::layouts.main')
@section('title', 'Adicionar - Projetos')
@section('content')

<!-- Header -->
@include('hive::components.title', ['page_title' => 'Adicionar - Projetos'])

<!-- Breadcrumbs -->
@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('projeto-create')])

	{!! Form::open(['url' => config('hello.url') . '/projeto', 'method' => 'post', 'class' => 'hello-form']) !!}
		@include('projeto.partials.form', ['submit_button_text' => 'Salvar'])
	{!! Form::close() !!}

@endsection
