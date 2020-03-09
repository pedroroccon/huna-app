@extends('layouts.app')
@section('content')

	<div class="container">
		<h1 class="mt-5">Adicionar etapa do projeto, {{ $projeto->nome }}</h1>

		{!! Form::open(['url' => $projeto->path() . '/etapa', 'method' => 'post']) !!}
			@include('projeto.etapa.partials.form')
		{!! Form::close() !!}
	</div>

@endsection
