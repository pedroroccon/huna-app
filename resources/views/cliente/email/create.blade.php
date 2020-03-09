@extends('layouts.app')
@section('content')

	<div class="container">
		<h1 class="mt-5">Adicionar e-mail do cliente, {{ $cliente->nome }}</h1>

		{!! Form::open(['url' => $cliente->path() . '/email', 'method' => 'post']) !!}
			@include('cliente.email.partials.form')
		{!! Form::close() !!}
	</div>

@endsection
