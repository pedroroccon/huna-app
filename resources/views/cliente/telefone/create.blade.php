@extends('layouts.app')
@section('content')

	<div class="container">
		<h1 class="mt-5">Adicionar telefone do cliente, {{ $cliente->nome }}</h1>

		{!! Form::open(['url' => $cliente->path() . '/telefone', 'method' => 'post']) !!}
			@include('cliente.telefone.partials.form')
		{!! Form::close() !!}
	</div>

@endsection
