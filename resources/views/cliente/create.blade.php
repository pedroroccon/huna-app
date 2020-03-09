@extends('layouts.app')

@section('content')

	<div class="container">
		<h1 class="mt-5">Adicionar cliente</h1>

		{!! Form::open(['url' => 'cliente', 'method' => 'post']) !!}
			@include('cliente.partials.form')
		{!! Form::close() !!}

	</div>

@endsection
