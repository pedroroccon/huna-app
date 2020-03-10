@extends('cliente.partials.layout')
@section('title', $email->email . ' - E-mails - ' . $cliente->nome . ' - Clientes')

@section('s-header')
	<!-- Header -->
	@include('hive::components.title', ['page_title' => $email->email . ' - E-mails - ' . $cliente->nome . ' - Clientes', 'page_button' => ['Editar', $email->path() . '/edit']])
	<!-- Breadcrumbs -->
	@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('cliente-email-show', $cliente, $email)])
@endsection

@section('s-content')

<div class="container-fluid">
	@component('hive::components.card', ['title' => 'Informações básicas'])
		<div class="row">
			<div class="col-lg-9">
				@component('hive::components.param', ['title' => 'E-mail'])
					<a href="mailto:{{ $email->email }}">{{ $email->email }}</a>
				@endcomponent
			</div>
			<div class="col-lg-3">
				@component('hive::components.param', ['title' => 'ID'])
					{{ $email->id }}
				@endcomponent
			</div>
		</div>
	@endcomponent
</div>

@endsection
