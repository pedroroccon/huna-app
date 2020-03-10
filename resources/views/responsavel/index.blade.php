@extends('hive::layouts.main')
@section('title', 'Responsáveis')
@section('content')

<!-- Header -->
@include('hive::components.title', ['page_title' => 'Responsáveis', 'page_button' => ['Adicionar', config('hello.url') . '/responsavel/create']])

<!-- Breadcrumbs -->
@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('responsavel')])

<div class="container-fluid">

	<div class="card">
		<div class="card-body">
			@if($responsaveis->count())
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table hello-table hello-table-no-wrap mb-0">
								<thead>
									<tr>
										<th>Nome completo</th>
										<th>Cargo</th>
										<th>Celular</th>
										<th>E-mail</th>
										<th class="hello-table-action">Ações</th>
									</tr>
								</thead>
								<tbody>
									@foreach($responsaveis as $responsavel)
									<tr>
										<td><a href="{{ url($responsavel->path()) }}"><strong>{{ $responsavel->nome }}</strong></a></td>
										<td>{{ $responsavel->cargo }}</td>
										<td>{{ $responsavel->celular }}</td>
										<td>{{ $responsavel->email }}</td>
										<td class="hello-table-action">
											{!! Form::open(['url' => $responsavel->path(), 'method' => 'delete']) !!}
												<a class="btn btn-sm btn-link" data-toggle="tooltip" title="Editar" href="{{ url($responsavel->path() . '/edit') }}"><i class="fas fa-pencil-alt fa-sm"></i></a>
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
		@include('hive::components.pagination', ['resource' => $responsaveis->appends(request()->except('page')), 'wrapper' => 'card-footer'])

	</div>
</div>

@endsection
