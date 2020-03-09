@extends('layouts.app')

@section('content')

	<div class="container">
		<h1 class="mt-5">Editar projeto, {{ $projeto->nome }}</h1>

		{!! Form::model($projeto, ['url' => $projeto->path(), 'method' => 'patch']) !!}
			@include('projeto.partials.form')
		{!! Form::close() !!}

	</div>

@endsection
