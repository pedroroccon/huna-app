@extends('layouts.app')

@section('content')

	<div class="container">
		<h1 class="mt-5">Adicionar Responsável</h1>

		{!! Form::open(['url' => 'responsavel', 'method' => 'post']) !!}
			@include('responsavel.partials.form')
		{!! Form::close() !!}

	</div>

@endsection
