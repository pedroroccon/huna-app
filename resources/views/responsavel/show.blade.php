@extends('hive::layouts.main')
@section('title', $responsavel->nome . ' - Responsáveis')
@section('content')

<!-- Header -->
@include('hive::components.title', ['page_title' => $responsavel->nome . ' - Responsáveis', 'page_button' => ['Editar', $responsavel->path() . '/edit']])

<!-- Breadcrumbs -->
@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('responsavel-show', $responsavel)])

<div class="container-fluid">

	@component('hive::components.card', ['title' => 'Informações gerais'])
		<div class="row">
			<div class="col-lg-7">
				@component('hive::components.param', ['title' => 'Nome completo'])
					{{ $responsavel->nome }}
				@endcomponent
			</div>
			<div class="col-lg-5">
				@component('hive::components.param', ['title' => 'Cargo'])
					{{ $responsavel->cargo }}
				@endcomponent
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				@component('hive::components.param', ['title' => 'Celular'])
					{{ $responsavel->celular ?? 'Não informado' }}
				@endcomponent
			</div>
			<div class="col-lg-6">
				@component('hive::components.param', ['title' => 'E-mail'])
					{!! ! empty($responsavel->email) ? '<a href="mailto:' . $responsavel->email . '">' . $responsavel->email . '</a>' : 'Não informado' !!}
				@endcomponent
			</div>
		</div>
	@endcomponent
@endsection
