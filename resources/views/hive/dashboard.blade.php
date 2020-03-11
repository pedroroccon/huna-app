@extends('hive::layouts.main')
@section('title', 'Início')
@section('content')

<!-- Header -->
@include('hive::components.title', ['page_title' => 'Início'])

<!-- Breadcrumbs -->
@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('hello-home')])

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-7">
			<h4 class="h4 text-primary">Olá, {{ auth()->user()->name }}</h4>
			<p>Seja bem-vindo ao sistema de gerenciamento de projetos. Utilize os menus laterais para navegar entre os módulos.</p>
		</div>
	</div>
</div>

@endsection