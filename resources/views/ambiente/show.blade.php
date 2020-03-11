@extends('hive::layouts.main')
@section('title', $ambiente->nome . ' - Ambientes')
@section('content')

<!-- Header -->
@include('hive::components.title', ['page_title' => $ambiente->nome . ' - Ambientes', 'page_button' => ['Editar', $ambiente->path() . '/edit']])

<!-- Breadcrumbs -->
@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('ambiente-show', $ambiente)])

<div class="container-fluid">

	@component('hive::components.card', ['title' => 'Informações gerais'])
		<div class="row">
			<div class="col-lg-7">
				@component('hive::components.param', ['title' => 'Nome'])
					{{ $ambiente->nome }}
				@endcomponent
			</div>
		</div>
	@endcomponent
@endsection
