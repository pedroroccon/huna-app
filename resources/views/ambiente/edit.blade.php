@extends('hive::layouts.main')
@section('title', 'Editar - ' . $ambiente->nome . ' - Ambientes')
@section('content')

<!-- Header -->
@include('hive::components.title', ['page_title' => 'Editar - ' . $ambiente->nome . ' - Ambientes'])

<!-- Breadcrumbs -->
@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('ambiente-edit', $ambiente)])

	{!! Form::model($ambiente, ['url' => $ambiente->path(), 'method' => 'patch', 'class' => 'hello-form']) !!}
		@include('ambiente.partials.form', ['submit_button_text' => 'Salvar'])
	{!! Form::close() !!}

@endsection
