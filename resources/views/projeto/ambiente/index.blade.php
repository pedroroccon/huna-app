@extends('projeto.partials.layout')
@section('title', 'Ambientes - Projetos')
@section('s-header')
    <!-- Header -->
    @include('hive::components.title', ['page_title' => 'Ambientes - Projetos', 'page_button' => ['Adicionar', $projeto->path() . '/ambiente/create']])
    <!-- Breadcrumbs -->
    @include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('projeto-ambiente', $projeto)])
@endsection

@section('s-content')
<div class="container-fluid">

	<div class="card">
		<div class="card-body">
			@if($ambientes->count())
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table hello-table hello-table-no-wrap mb-0">
								<thead>
									<tr>
										<th>Nome do ambiente</th>
										<th>Etapa</th>
										<th class="hello-table-action">Ações</th>
									</tr>
								</thead>
								<tbody>
									@foreach($ambientes as $ambiente)
									<tr>
                                        <td><a href="{{ url($ambiente->path()) }}"><strong>{{ $ambiente->nome }}</strong></a><br><small class="text-muted">{{ $ambiente->descricao }}</small></td>
										<td>{!! ! empty($ambiente->etapaAtual) ? '<a href="' . url($ambiente->etapaAtual->path()) . '">' . $ambiente->etapaAtual->nome . '</a><br><small class="text-muted"></small>' : 'Etapa não encontrada' !!}</td>
										<td class="hello-table-action">
											{!! Form::open(['url' => $ambiente->path(), 'method' => 'delete']) !!}
												<a class="btn btn-sm btn-link" data-toggle="tooltip" title="Editar" href="{{ url($ambiente->path() . '/edit') }}"><i class="fas fa-pencil-alt fa-sm"></i></a>
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
		@include('hive::components.pagination', ['resource' => $ambientes->appends(request()->except('page')), 'wrapper' => 'card-footer'])

	</div>
</div>

@endsection
