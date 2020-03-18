@extends('hive::layouts.main')
@section('title', 'Editar - ' . $etapa->nome . ' - Etapas - ' . $ambiente->nome . ' - Ambientes - ' . $projeto->nome . ' - Projetos')
@section('content')

<!-- Header -->
@include('hive::components.title', ['page_title' => 'Editar - ' . $etapa->nome . ' - Etapas - ' . $ambiente->nome . ' - Ambientes - ' . $projeto->nome . ' - Projetos'])

<!-- Breadcrumbs -->
@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('projeto-ambiente-etapa-edit', $projeto, $ambiente, $etapa)])

	{!! Form::model($etapa, ['url' => $etapa->path(), 'method' => 'patch', 'class' => 'hello-form']) !!}
		@include('projeto.ambiente.etapa.partials.form', ['submit_button_text' => 'Salvar'])
	{!! Form::close() !!}

@endsection
