@extends('hive::layouts.main')
@section('title', 'Editar - ' . $ambiente->nome . ' - Ambientes - ' . $projeto->nome . ' - Projetos')
@section('content')

<!-- Header -->
@include('hive::components.title', ['page_title' => 'Editar - ' . $ambiente->nome . ' - Ambientes -' . $projeto->nome . ' - Projetos'])

<!-- Breadcrumbs -->
@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('projeto-ambiente-edit', $projeto, $ambiente)])

	{!! Form::model($ambiente, ['url' => $ambiente->path(), 'method' => 'patch', 'class' => 'hello-form']) !!}
		@include('projeto.ambiente.partials.form', ['submit_button_text' => 'Salvar'])
	{!! Form::close() !!}

@endsection
