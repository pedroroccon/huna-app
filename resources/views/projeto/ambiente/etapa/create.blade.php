@extends('hive::layouts.main')
@section('title', 'Adicionar - Etapa - Ambiente - Projetos')
@section('content')

<!-- Header -->
@include('hive::components.title', ['page_title' => 'Adicionar - Etapa - Ambiente - Projetos'])

<!-- Breadcrumbs -->
@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('projeto-ambiente-etapa-create', $projeto, $ambiente)])

	{!! Form::open(['url' => $ambiente->path() . '/etapa', 'method' => 'post', 'class' => 'hello-form']) !!}
		@include('projeto.ambiente.etapa.partials.form', ['submit_button_text' => 'Salvar'])
	{!! Form::close() !!}

@endsection
