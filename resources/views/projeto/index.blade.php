@extends('layouts.app')

@section('content')

	<div class="container">
		<h1 class="mt-5">Projetos</h1>
		<a href="{{ url('projeto/create') }}" class="btn btn-primary" class="mb-5 d-block">Adicionar</a>

    @if($projetos->count())
		<table class="table">
			<thead>
				<tr>
					<th>Nome do projeto</th>
          <th>Cliente</th>
					<th>Orçamento</th>
					<th>Data do dt_contrato</th>
					<th>Data Início</th>
					<th>Data de Entrega - Previsão</th>
					<th>Data de Entrega - Real</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				@foreach($projetos as $projeto)
					<tr>
						<td><a href="{{ url($projeto->path()) }}"><strong>{{ $projeto->nome }}</strong></a></td>
            <td>{{ $projeto->cliente->nome }}</td>
            <td>{{ $projeto->orcamento }}</td>
						<td>{{ $projeto->dt_contrato }}</td>
						<td>{{ $projeto->dt_inicio }}</td>
						<td>{{ $projeto->dt_prev_entrega }}</td>
						<td>{{ $projeto->dt_fim }}</td>
						<td>
							{!! Form::open(['url' => $projeto->path(), 'method' => 'delete']) !!}
								<a href="{{ url($projeto->path() . '/edit') }}" class="btn btn-sm btn-primary">Editar</a>
								{!! Form::submit('Remover', ['class' => 'btn btn-sm btn-danger']) !!}
							{!! Form::close() !!}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
    @else
      <div class="alert alert-info">Nenhum projeto encontrado</div>
    @endif
	</div>

@endsection
