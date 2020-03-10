@extends('hive::layouts.main')
@section('title', 'Editar - ' . $projeto->nome . ' - Projetos')
@section('content')

<!-- Header -->
@include('hive::components.title', ['page_title' => 'Editar - ' . $projeto->nome . ' - Projetos'])

<!-- Breadcrumbs -->
@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('projeto-edit', $projeto)])

	{!! Form::model($projeto, ['url' => $projeto->path(), 'method' => 'patch', 'class' => 'hello-form']) !!}
		@include('projeto.partials.form', ['submit_button_text' => 'Salvar'])
	{!! Form::close() !!}

@endsection
