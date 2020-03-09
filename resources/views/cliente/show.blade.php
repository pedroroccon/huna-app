@extends('layouts.app')

@section('content')

	<div class="container">
		<h1 class="mt-5">Cliente, {{ $cliente->nome }}</h1>
		<a href="{{ url($cliente->path() . '/telefone') }}" class="btn btn-primary mt-5">Telefones</a>
		<a href="{{ url($cliente->path() . '/email') }}" class="btn btn-primary mt-5">E-mails</a>
		<a href="{{ url($cliente->path() . '/endereco') }}" class="btn btn-primary mt-5">Endereços</a>
    <div class="card card-body shadow-lg my-4">
      <div class="row">
        <div class="col-lg-7">
          <span><strong>Nome completo</strong><br> {{ $cliente->nome }}</span>
        </div>
        <div class="col-lg-5">
          <span><strong>CPF</strong><br> {{ $cliente->cpf }}</span>
        </div>
      </div>
    </div>

    <div class="card card-body shadow-lg my-4">
      <h4 class="h4">Projetos</h4>

			@if($cliente->projetos->count())

				<table class="table">
					<thead>
						<tr>
							<th>Projeto</th>
						</tr>
					</thead>
					<tbody>
						@foreach($cliente->projetos as $projeto)
							<tr>
								<td>{{ $projeto->nome }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>

			@else
				<div class="alert alert-info">Nenhum projeto encontrado.</div>
			@endif

    </div>
	</div>

@endsection
