@extends('layouts.app')

@section('content')

	<div class="container">
		<h1 class="mt-5">Projeto, {{ $projeto->nome }}</h1>
    <a href="{{ url($projeto->path() . '/etapa/create') }}" class="mt-5 btn btn-primary">Adicionar etapa</a>

    <div class="card card-body shadow-lg my-4">
      <div class="row">
        <div class="col-lg-4">
          <span><strong>Nome do projeto</strong><br> {{ $projeto->nome }}</span>
        </div>
        <div class="col-lg-4">
          <span><strong>Cliente</strong><br> {{ $projeto->cliente->nome }}</span>
        </div>
        <div class="col-lg-4">
          <span><strong>Data de início</strong><br> {{ $projeto->dt_inicio->format('d/m/Y') }}</span>
        </div>
      </div>
    </div>
	</div>

@endsection
