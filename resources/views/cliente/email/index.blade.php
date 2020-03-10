@extends('hive::layouts.main')
@section('title', 'E-mails - ' . $cliente->nome . ' - Clientes')
@section('content')

<!-- Header -->
@include('hive::components.title', ['page_title' => 'E-mails - ' . $cliente->nome . ' - Clientes', 'page_button' => ['Adicionar', $cliente->path() . '/email/create']])

<!-- Breadcrumbs -->
@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('cliente-email', $cliente)])

<div class="container-fluid">

	<div class="card">
		<div class="card-body">
			@if($emails->count())
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
									@foreach($emails as $email)
									<tr>
										<td># {{ $email->id }}</td>
										<td><a href="{{ url($email->path()) }}"><strong>{{ $email->email }}</strong></a></td>
										<td class="hello-table-action">
											{!! Form::open(['url' => $email->path(), 'method' => 'delete']) !!}
												<a class="btn btn-sm btn-link" data-toggle="tooltip" title="Editar" href="{{ url($email->path() . '/edit') }}"><i class="fas fa-pencil-alt fa-sm"></i></a>
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
		@include('hive::components.pagination', ['resource' => $emails->appends(request()->except('page')), 'wrapper' => 'card-footer'])

	</div>
</div>

@endsection
