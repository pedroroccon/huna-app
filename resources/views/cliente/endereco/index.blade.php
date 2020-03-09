@extends('layouts.app')

@section('content')

	<div class="container">
		<h1 class="mt-5">Endereço do cliente, {{ $cliente->nome }}</h1>
		<a href="{{ url()->current() . '/create' }}" class="btn btn-primary" class="mb-5 d-block">Adicionar</a>

		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Rua</th>
					<th>Numero</th>
					<th>Complemento</th>
					<th>Bairro</th>
					<th>Cidade</th>
					<th>CEP</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				@foreach($enderecos as $endereco)
					<tr>
						<td># {{ $endereco->id }}</td>
						<td><a href="{{ url($endereco->path()) }}"><strong>{{ $endereco->rua }}</strong></a></td>
						<td>{{ $endereco->numero }}</td>
						<td>{{ $endereco->complemento }}</td>
						<td>{{ $endereco->bairro }}</td>
						<td>{{ $endereco->cidade }}</td>
						<td>{{ $endereco->cep }}</td>
						<td>
							{!! Form::open(['url' => $endereco->path(), 'method' => 'delete']) !!}
								<a href="{{ url($endereco->path() . '/edit') }}" class="btn btn-sm btn-primary">Editar</a>
								{!! Form::submit('Remover', ['class' => 'btn btn-sm btn-danger']) !!}
							{!! Form::close() !!}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@endsection
