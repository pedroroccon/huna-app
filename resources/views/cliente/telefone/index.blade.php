@extends('layouts.app')

@section('content')

	<div class="container">
		<h1 class="mt-5">Telefones do cliente, {{ $cliente->nome }}</h1>
		<a href="{{ url()->current() . '/create' }}" class="btn btn-primary" class="mb-5 d-block">Adicionar</a>

		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Fone</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				@foreach($telefones as $telefone)
					<tr>
						<td># {{ $telefone->id }}</td>
						<td><a href="{{ url($telefone->path()) }}"><strong>{{ $telefone->fone }}</strong></a></td>
						<td>
							{!! Form::open(['url' => $telefone->path(), 'method' => 'delete']) !!}
								<a href="{{ url($telefone->path() . '/edit') }}" class="btn btn-sm btn-primary">Editar</a>
								{!! Form::submit('Remover', ['class' => 'btn btn-sm btn-danger']) !!}
							{!! Form::close() !!}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@endsection
