@extends('layouts.app')
@section('content')

	<div class="container">
		<h1 class="mt-5">Editar Endereco {{ $endereco->endereco }} no cliente, {{ $cliente->nome }}</h1>

		{!! Form::model($endereco, ['url' => $endereco->path(), 'method' => 'patch']) !!}
			@include('cliente.endereco.partials.form')
		{!! Form::close() !!}
	</div>

@endsection
