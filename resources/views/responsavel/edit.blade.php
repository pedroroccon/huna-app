@extends('hive::layouts.main')
@section('title', 'Editar - ' . $responsavel->nome . ' - Responsáveis')
@section('content')

<!-- Header -->
@include('hive::components.title', ['page_title' => 'Editar - ' . $responsavel->nome . ' - Responsáveis'])

<!-- Breadcrumbs -->
@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('responsavel-edit', $responsavel)])

	{!! Form::model($responsavel, ['url' => $responsavel->path(), 'method' => 'patch', 'class' => 'hello-form']) !!}
		@include('responsavel.partials.form', ['submit_button_text' => 'Salvar'])
	{!! Form::close() !!}

@endsection
