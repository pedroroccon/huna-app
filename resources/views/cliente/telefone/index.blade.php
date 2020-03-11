@extends('cliente.partials.layout')
@section('title', 'Telefones - ' . $cliente->nome . ' - Clientes')

@section('s-header')
	<!-- Header -->
	@include('hive::components.title', ['page_title' => 'Telefones - ' . $cliente->nome . ' - Clientes', 'page_button' => ['Adicionar', $cliente->path() . '/telefone/create']])
	<!-- Breadcrumbs -->
	@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('cliente-telefone', $cliente)])
@endsection

@section('s-content')
<div class="container-fluid">

	<div class="card">
		<div class="card-body">
			@if($telefones->count())
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table hello-table hello-table-no-wrap mb-0">
								<thead>
									<tr>
										<th>ID</th>
										<th>E-mail</th>
										<th class="hello-table-action">Ações</th>
									</tr>
								</thead>
								<tbody>
									@foreach($telefones as $telefone)
									<tr>
										<td># {{ $telefone->id }}</td>
										<td><a href="{{ url($telefone->path()) }}"><strong>{{ $telefone->telefone }}</strong></a></td>
										<td class="hello-table-action">
											{!! Form::open(['url' => $telefone->path(), 'method' => 'delete']) !!}
												<a class="btn btn-sm btn-link" data-toggle="tooltip" title="Editar" href="{{ url($telefone->path() . '/edit') }}"><i class="fas fa-pencil-alt fa-sm"></i></a>
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
		@include('hive::components.pagination', ['resource' => $telefones->appends(request()->except('page')), 'wrapper' => 'card-footer'])

	</div>
</div>

@endsection
