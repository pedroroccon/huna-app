@extends('layouts.app')

@section('content')

	<div class="container">
		<h1 class="mt-5">Editar cliente, {{ $cliente->nome }}</h1>

		{!! Form::model($cliente, ['url' => $cliente->path(), 'method' => 'patch']) !!}
			@include('cliente.partials.form')
		{!! Form::close() !!}

	</div>

@endsection
