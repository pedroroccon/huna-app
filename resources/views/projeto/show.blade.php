@extends('projeto.partials.layout')
@section('title', $projeto->nome . ' - Projetos')

@section('s-header')
	<!-- Header -->
	@include('hive::components.title', ['page_title' => $projeto->nome . ' - Projetos'])
	<!-- Breadcrumbs -->
	@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('projeto-edit', $projeto)])
@endsection

@section('s-content')
	<div class="container-fluid">
		@component('hive::components.card', ['title' => 'Informações básicas'])
			<div class="row">
				<div class="col-lg-4">
					@component('hive::components.param', ['title' => 'Nome do projeto'])
						{{ $projeto->nome }}
					@endcomponent
				</div>
				<div class="col-lg-4">
					@component('hive::components.param', ['title' => 'Nome do cliente'])
						{{ $projeto->cliente->nome }}
					@endcomponent
				</div>
				<div class="col-lg-4">
					@component('hive::components.param', ['title' => 'Data de início'])
						{{ ! empty($projeto->dt_inicio) ? $projeto->dt_inicio->format('d/m/Y') : 'Não definido' }}
					@endcomponent
				</div>
			</div>
		@endcomponent
	</div>
@endsection
