@extends('cliente.partials.layout')
@section('title', 'Endereços - ' . $cliente->nome . ' - Clientes')

@section('s-header')
	<!-- Header -->
	@include('hive::components.title', ['page_title' => 'Endereços - ' . $cliente->nome . ' - Clientes', 'page_button' => ['Adicionar', $cliente->path() . '/endereco/create']])
	<!-- Breadcrumbs -->
	@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('cliente-endereco', $cliente)])
@endsection

@section('s-content')
<div class="container-fluid">

	<div class="card">
		<div class="card-body">
			@if($enderecos->count())
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table hello-table hello-table-no-wrap mb-0">
								<thead>
									<tr>
										<th>ID</th>
										<th>Endereço</th>
										<th>Complemento</th>
										<th>Cidade/Estado</th>
										<th>CEP</th>
										<th class="hello-table-action">Ações</th>
									</tr>
								</thead>
								<tbody>
									@foreach($enderecos as $endereco)
									<tr>
										<td># {{ $endereco->id }}</td>
										<td><a href="{{ url($endereco->path()) }}"><strong>{{ $endereco->rua }}, N {{ $endereco->numero }} - {{ $endereco->bairro }}</strong></a></td>
										<td>{!! $endereco->complemento ?? '<span class="text-muted">Não há</span>' !!}</td>
										<td>{{ $endereco->cidade }}/{{ $endereco->estado }}</td>
										<td>{{ $endereco->cep }}</td>
										<td class="hello-table-action">
											{!! Form::open(['url' => $endereco->path(), 'method' => 'delete']) !!}
												<a class="btn btn-sm btn-link" data-toggle="tooltip" title="Editar" href="{{ url($endereco->path() . '/edit') }}"><i class="fas fa-pencil-alt fa-sm"></i></a>
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
		@include('hive::components.pagination', ['resource' => $enderecos->appends(request()->except('page')), 'wrapper' => 'card-footer'])

	</div>
</div>

@endsection
