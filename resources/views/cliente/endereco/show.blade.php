@extends('cliente.partials.layout')
@section('title', $endereco->titulo . ' - Endereços - ' . $cliente->nome . ' - Clientes')

@section('s-header')
	<!-- Header -->
	@include('hive::components.title', ['page_title' => $endereco->titulo . ' - Endereços - ' . $cliente->nome . ' - Clientes', 'page_button' => ['Editar', $endereco->path() . '/edit']])
	<!-- Breadcrumbs -->
	@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('cliente-endereco-show', $cliente, $endereco)])
@endsection

@section('s-content')

<div class="container-fluid">

	@component('hive::components.card')
		<div class="row">
			<div class="col-lg-12">
				@component('hive::components.param', ['title' => 'Título'])
					{{ $endereco->titulo }}
				@endcomponent
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				@component('hive::components.param', ['title' => 'Rua'])
					{{ $endereco->rua }}
				@endcomponent
			</div>
			<div class="col-lg-4">
				@component('hive::components.param', ['title' => 'Número'])
					{{ $endereco->numero }}
				@endcomponent
			</div>
			<div class="col-lg-4">
				@component('hive::components.param', ['title' => 'Bairro'])
					{{ $endereco->bairro }}
				@endcomponent
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				@component('hive::components.param', ['title' => 'Complemento'])
					{!! $endereco->complemento ?? '<span class="text-muted">Não há</span>' !!}
				@endcomponent
			</div>
		</div>
		<div class="row">
			<div class="col-lg-5">
				@component('hive::components.param', ['title' => 'Cidade/estado'])
					{{ $endereco->cidade }}/{{ $endereco->estado }}
				@endcomponent
			</div>
			<div class="col-lg-3">
				@component('hive::components.param', ['title' => 'CEP'])
					{{ $endereco->cep }}
				@endcomponent
			</div>
		</div>
	@endcomponent
	
</div>

@endsection
