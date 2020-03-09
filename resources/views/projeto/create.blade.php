@extends('layouts.app')

@section('content')

	<div class="container">
		<h1 class="mt-5">Adicionar projeto</h1>

		{!! Form::open(['url' => 'projeto', 'method' => 'post']) !!}
			@include('projeto.partials.form')
		{!! Form::close() !!}

	</div>

@endsection
