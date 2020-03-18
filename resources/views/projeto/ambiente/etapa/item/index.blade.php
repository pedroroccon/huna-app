@extends('projeto.partials.layout')
@section('title', 'Itens - ' . $etapa->nome . ' - Etapas - ' . $ambiente->nome . ' - Ambientes - Projetos')
@section('s-header')
    <!-- Header -->
    @include('hive::components.title', ['page_title' => 'Itens - ' . $etapa->nome . ' - Etapas - ' . $ambiente->nome . ' - Ambientes - Projetos', 'page_button' => ['Adicionar', $etapa->path() . '/item/create']])
    <!-- Breadcrumbs -->
    @include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('projeto-ambiente-etapa-item', $projeto, $ambiente, $etapa)])
@endsection

@section('s-content')
<div class="container-fluid">

	<div class="card">
		<div class="card-body">
			@if($itens->count())
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table hello-table hello-table-no-wrap mb-0">
								<thead>
									<tr>
										<th>Nome do item</th>
										<th class="hello-table-action">Ações</th>
									</tr>
								</thead>
								<tbody>
									@foreach($itens as $item)
									<tr>
                                        <td><a href="{{ url($item->path()) }}"><strong>{{ $item->titulo }}</strong></a></td>
										<td class="hello-table-action">
											{!! Form::open(['url' => $item->path(), 'method' => 'delete']) !!}
												<a class="btn btn-sm btn-link" data-toggle="tooltip" title="Editar" href="{{ url($item->path() . '/edit') }}"><i class="fas fa-pencil-alt fa-sm"></i></a>
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
		@include('hive::components.pagination', ['resource' => $itens->appends(request()->except('page')), 'wrapper' => 'card-footer'])

	</div>
</div>

@endsection
