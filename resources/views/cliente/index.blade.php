@extends('hive::layouts.main')
@section('title', 'Clientes')
@section('content')

<!-- Header -->
@include('hive::components.title', ['page_title' => 'Clientes', 'page_button' => ['Adicionar', config('hello.url') . '/cliente/create']])

<!-- Breadcrumbs -->
@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('cliente')])

<div class="container-fluid">

	<div class="card">
		<div class="card-body">

			@include('cliente.partials.toolbar')

			@if($clientes->count())
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table hello-table hello-table-no-wrap mb-0">
								<thead>
									<tr>
										<th>Nome completo</th>
										<th>CPF</th>
										<th class="hello-table-action">Ações</th>
									</tr>
								</thead>
								<tbody>
									@foreach($clientes as $cliente)
									<tr>
										<td>
											<strong><a href="{{ url($cliente->path()) }}">{{ $cliente->nome }}</a></strong>
										</td>
										<td>{{ $cliente->cpf }}</td>
										<td class="hello-table-action">
											{!! Form::open(['url' => $cliente->path(), 'method' => 'delete']) !!}
												<a class="btn btn-sm btn-link" data-toggle="tooltip" title="Editar" href="{{ url($cliente->path() . '/edit') }}"><i class="fas fa-pencil-alt fa-sm"></i></a>
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
		@include('hive::components.pagination', ['resource' => $clientes->appends(request()->except('page')), 'wrapper' => 'card-footer'])

	</div>
</div>

<!-- Modals -->
@include('cliente.partials.pesquisar')

@endsection
