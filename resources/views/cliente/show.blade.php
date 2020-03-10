@extends('cliente.partials.layout')
@section('title', $cliente->nome . ' - Clientes')

@section('s-header')
	<!-- Header -->
	@include('hive::components.title', ['page_title' => $cliente->nome . ' - Clientes', 'page_button' => ['Editar', $cliente->path() . '/edit']])
	<!-- Breadcrumbs -->
	@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('cliente-show', $cliente)])
@endsection

@section('s-content')

<div class="container-fluid">

	@component('hive::components.card')
		<div class="row">
			<div class="col-lg-8">
				@component('hive::components.param', ['title' => 'Nome completo'])
					{{ $cliente->nome }}
				@endcomponent
			</div>
			<div class="col-lg-4">
				@component('hive::components.param', ['title' => 'CPF'])
					{{ $cliente->cpf }}
				@endcomponent
			</div>
		</div>
	@endcomponent
	
</div>

@endsection
