@extends('layouts.app')

@section('content')

	<div class="container">
		<h1 class="mt-5">E-mail do cliente, {{ $cliente->nome }}</h1>
		<a href="{{ url()->current() . '/create' }}" class="btn btn-primary" class="mb-5 d-block">Adicionar</a>

		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Email</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				@foreach($emails as $email)
					<tr>
						<td># {{ $email->id }}</td>
						<td><a href="{{ url($email->path()) }}"><strong>{{ $email->email }}</strong></a></td>
						<td>
							{!! Form::open(['url' => $email->path(), 'method' => 'delete']) !!}
								<a href="{{ url($email->path() . '/edit') }}" class="btn btn-sm btn-primary">Editar</a>
								{!! Form::submit('Remover', ['class' => 'btn btn-sm btn-danger']) !!}
							{!! Form::close() !!}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@endsection
