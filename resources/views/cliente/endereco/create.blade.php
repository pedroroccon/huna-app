@extends('layouts.app')
@section('content')

	<div class="container">
		<h1 class="mt-5">Adicionar Endereço do cliente, {{ $cliente->nome }}</h1>

		{!! Form::open(['url' => $cliente->path() . '/endereco', 'method' => 'post']) !!}
			@include('cliente.endereco.partials.form')
		{!! Form::close() !!}
	</div>

@endsection
