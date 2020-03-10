@extends('cliente.partials.layout')
@section('title', $telefone->fone . ' - Telefones - ' . $cliente->nome . ' - Clientes')

@section('s-header')
	<!-- Header -->
	@include('hive::components.title', ['page_title' => $telefone->fone . ' - Telefones - ' . $cliente->nome . ' - Clientes', 'page_button' => ['Editar', $telefone->path() . '/edit']])
	<!-- Breadcrumbs -->
	@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('cliente-telefone-show', $cliente, $telefone)])
@endsection

@section('s-content')

<div class="container-fluid">
	@component('hive::components.card', ['title' => 'Informações básicas'])
		<div class="row">
			<div class="col-lg-9">
				@component('hive::components.param', ['title' => 'Telefone'])
					{{ $telefone->fone }}
				@endcomponent
			</div>
			<div class="col-lg-3">
				@component('hive::components.param', ['title' => 'ID'])
					{{ $telefone->id }}
				@endcomponent
			</div>
		</div>
	@endcomponent
</div>

@endsection
