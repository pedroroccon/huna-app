@extends('layouts.app')
@section('content')

	<div class="container">
		<h1 class="mt-5">Editar email {{ $email->email }} do cliente, {{ $cliente->nome }}</h1>

		{!! Form::model($email, ['url' => $email->path(), 'method' => 'patch']) !!}
			@include('cliente.email.partials.form')
		{!! Form::close() !!}
	</div>

@endsection
