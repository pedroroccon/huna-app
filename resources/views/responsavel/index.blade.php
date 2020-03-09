@extends('layouts.app')

@section('content')

	<div class="container">
		<h1 class="mt-5">Responsável</h1>
		<a href="{{ url('responsavel/create') }}" class="btn btn-primary" class="mb-5 d-block">Adicionar</a>

		<table class="table">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Cargo</th>
					<th>Celular</th>
					<th>E-mail</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				@foreach($responsavels as $responsavel)
					<tr>
						<td><a href="{{ url($responsavel->path()) }}"><strong>{{ $responsavel->nome }}</strong></a></td>
						<td>{{ $responsavel->cargo }}</td>
						<td>{{ $responsavel->celular }}</td>
						<td>{{ $responsavel->email }}</td>
						<td>
							{!! Form::open(['url' => $responsavel->path(), 'method' => 'delete']) !!}
								<a href="{{ url($responsavel->path() . '/edit') }}" class="btn btn-sm btn-primary">Editar</a>
								{!! Form::submit('Remover', ['class' => 'btn btn-sm btn-danger']) !!}
							{!! Form::close() !!}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>

	</div>

@endsection
