@extends('hive::layouts.main')
@section('title', 'Projetos')
@section('content')

<!-- Header -->
@include('hive::components.title', ['page_title' => 'Projetos', 'page_button' => ['Adicionar', config('hello.url') . '/projeto/create']])

<!-- Breadcrumbs -->
@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('projeto')])

<div class="container-fluid">

	<div class="card">
		<div class="card-body">
			@if($projetos->count())
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table hello-table hello-table-no-wrap mb-0">
								<thead>
									<tr>
										<th>Nome do projeto</th>
										<th>Cliente</th>
										<th class="text-right">Orçamento</th>
										<th>Contrato</th>
										<th>Início</th>
										<th>Prev. entrega</th>
										<th>Término</th>
										<th class="hello-table-action">Ações</th>
									</tr>
								</thead>
								<tbody>
									@foreach($projetos as $projeto)
									<tr>
										<td><a href="{{ url($projeto->path()) }}"><strong>{{ $projeto->nome }}</strong></a></td>
										<td>{{ $projeto->cliente->nome }}</td>
										<td class="text-right">R$ {{ number_format($projeto->orcamento, 2, ',', '.') }}</td>
										<td>{{ ! empty($projeto->dt_contrato) ? $projeto->dt_contrato->format('d/m/Y') : 'Não informado' }}</td>
										<td>{{ ! empty($projeto->dt_inicio) ? $projeto->dt_inicio->format('d/m/Y') : 'Não informado' }}</td>
										<td>{{ ! empty($projeto->dt_prev_entrega) ? $projeto->dt_prev_entrega->format('d/m/Y') : 'Não informado' }}</td>
										<td>{{ ! empty($projeto->dt_fim) ? $projeto->dt_fim->format('d/m/Y') : 'Não informado' }}</td>
										<td class="hello-table-action">
											{!! Form::open(['url' => $projeto->path(), 'method' => 'delete']) !!}
												<a class="btn btn-sm btn-link" data-toggle="tooltip" title="Editar" href="{{ url($projeto->path() . '/edit') }}"><i class="fas fa-pencil-alt fa-sm"></i></a>
												<button class="btn btn-sm btn-link btn-confirm-delete" data-toggle="tooltip" title="Remover" type="submit"><i class="fas fa-trash fa-sm text-danger"></i></button>
											{!! Form::close() !!}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			@else
				@include('hive::components.no-results')
			@endif
		</div>

		<!-- Paginação -->
		@include('hive::components.pagination', ['resource' => $projetos->appends(request()->except('page')), 'wrapper' => 'card-footer'])

	</div>
</div>

@endsection
