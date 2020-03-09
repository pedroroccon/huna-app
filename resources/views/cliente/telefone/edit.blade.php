@extends('layouts.app')
@section('content')

	<div class="container">
		<h1 class="mt-5">Editar telefone {{ $telefone->fone }} no cliente, {{ $cliente->nome }}</h1>

		{!! Form::model($telefone, ['url' => $telefone->path(), 'method' => 'patch']) !!}
			@include('cliente.telefone.partials.form')
		{!! Form::close() !!}
	</div>

@endsection
