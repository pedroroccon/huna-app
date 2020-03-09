@extends('layouts.app')

@section('content')

	<div class="container">
		<h1 class="mt-5">Clientes</h1>
		<a href="{{ url('cliente/create') }}" class="btn btn-primary" class="mb-5 d-block">Adicionar</a>

		<table class="table">
			<thead>
				<tr>
					<th>Nome</th>
					<th>CPF</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				@foreach($clientes as $cliente)
					<tr>
						<td><a href="{{ url($cliente->path()) }}"><strong>{{ $cliente->nome }}</strong></a></td>
						<td>{{ $cliente->cpf }}</td>
						<td>
							{!! Form::open(['url' => $cliente->path(), 'method' => 'delete']) !!}
								<a href="{{ url($cliente->path() . '/edit') }}" class="btn btn-sm btn-primary">Editar</a>
								{!! Form::submit('Remover', ['class' => 'btn btn-sm btn-danger']) !!}
							{!! Form::close() !!}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>

	</div>

@endsection
