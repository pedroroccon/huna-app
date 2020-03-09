@extends('layouts.app')

@section('content')

	<div class="container">
		<h1 class="mt-5">Editar responsáveis, {{ $responsavel->nome }}</h1>

		{!! Form::model($responsavel, ['url' => $responsavel->path(), 'method' => 'patch']) !!}
			@include('responsavel.partials.form')
		{!! Form::close() !!}

	</div>

@endsection
