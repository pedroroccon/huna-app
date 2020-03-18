@extends('projeto.partials.layout')
@section('title', 'Etapas - ' . $ambiente->nome . ' - Ambientes - Projetos')
@section('s-header')
    <!-- Header -->
    @include('hive::components.title', ['page_title' => 'Etapas - ' . $ambiente->nome . ' - Ambientes - Projetos', 'page_button' => ['Adicionar', $ambiente->path() . '/etapa/create']])
    <!-- Breadcrumbs -->
    @include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('projeto-ambiente-etapa', $projeto, $ambiente)])
@endsection

@section('s-content')
<div class="container-fluid">

	<div class="card">
		<div class="card-body">
			@if($etapas->count())
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table hello-table hello-table-no-wrap mb-0">
								<thead>
									<tr>
										<th>Nome da etapa</th>
										<th>Iniciada em</th>
                                        <th>Finalizada em</th>
                                        <th>Responsável</th>
										<th class="hello-table-action">Ações</th>
									</tr>
								</thead>
								<tbody>
									@foreach($etapas as $etapa)
									<tr>
                                        <td><a href="{{ url($etapa->path()) }}"><strong>{{ $etapa->nome }}</strong></a></td>
                                        <td>{!! ! empty($etapa->inicio_em) ? $etapa->inicio_em->format('d/m/Y') : '<span class="text-muted">Não informado</span>' !!}</td>
                                        <td>{!! ! empty($etapa->termino_em) ? $etapa->termino_em->format('d/m/Y') : '<span class="text-muted">Não informado</span>' !!}</td>
                                        <td>{!! ! empty($etapa->responsavel) ? $etapa->responsavel->nome : '<span class="text-muted">Não definido</span>' !!}</td>
										<td class="hello-table-action">
											{!! Form::open(['url' => $etapa->path(), 'method' => 'delete']) !!}
												<a class="btn btn-sm btn-link" data-toggle="tooltip" title="Editar" href="{{ url($etapa->path() . '/edit') }}"><i class="fas fa-pencil-alt fa-sm"></i></a>
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
		@include('hive::components.pagination', ['resource' => $etapas->appends(request()->except('page')), 'wrapper' => 'card-footer'])

	</div>
</div>

@endsection
