@extends('hive::layouts.main')
@section('title', 'Adicionar - Ambientes')
@section('content')

<!-- Header -->
@include('hive::components.title', ['page_title' => 'Adicionar - Ambientes'])

<!-- Breadcrumbs -->
@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('ambiente-create')])

	{!! Form::open(['url' => config('hello.url') . '/ambiente', 'method' => 'post', 'class' => 'hello-form']) !!}
		@include('ambiente.partials.form', ['submit_button_text' => 'Salvar'])
	{!! Form::close() !!}

@endsection
