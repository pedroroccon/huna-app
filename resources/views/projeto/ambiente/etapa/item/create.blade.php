@extends('hive::layouts.main')
@section('title', 'Adicionar - Item - Etapa - Ambiente - Projetos')
@section('content')

<!-- Header -->
@include('hive::components.title', ['page_title' => 'Adicionar - Item - Etapa - Ambiente - Projetos'])

<!-- Breadcrumbs -->
@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('projeto-ambiente-etapa-item-create', $projeto, $ambiente, $etapa)])

	{!! Form::open(['url' => $etapa->path() . '/item', 'method' => 'post', 'class' => 'hello-form']) !!}
		@include('projeto.ambiente.etapa.item.partials.form', ['submit_button_text' => 'Salvar'])
	{!! Form::close() !!}

@endsection
