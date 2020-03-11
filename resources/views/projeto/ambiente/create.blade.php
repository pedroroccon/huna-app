@extends('hive::layouts.main')
@section('title', 'Adicionar - Ambiente - Projetos')
@section('content')

<!-- Header -->
@include('hive::components.title', ['page_title' => 'Adicionar - Ambiente - Projetos'])

<!-- Breadcrumbs -->
@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('projeto-ambiente-create', $projeto)])

	{!! Form::open(['url' => $projeto->path() . '/ambiente', 'method' => 'post', 'class' => 'hello-form']) !!}
		@include('projeto.ambiente.partials.form', ['submit_button_text' => 'Salvar'])
	{!! Form::close() !!}

@endsection
