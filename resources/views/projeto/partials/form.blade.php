<div class="container-fluid">

	@component('hive::components.card', ['title' => 'Informações gerais'])

		<div class="row form-group">
			<div class="col-lg-6">
				{!! Form::label('cliente_id', 'Selecione o cliente') !!}
				{!! Form::select('cliente_id', [
					'Por favor, selecione...',
				] + App\Cliente::orderBy('nome', 'asc')->get()->pluck('nome', 'id')->toArray(), null, ['class' => 'form-control']) !!}
				<span class="form-text">Por favor, escolha o cliente que será atrelado a este projeto.</span>
			</div>
			<div class="col-lg-6">
				{!! Form::label('nome', 'Nome do projeto') !!}
				{!! Form::text('nome', null, ['class' => 'form-control']) !!}
				<span class="form-text">Especifique um nome para o seu projeto. Este nome identificará o projeto no sistema.</span>
			</div>
		</div>
	
		<div class="row form-group">
			
			<div class="col-lg-4">
				{!! Form::label('orcamento', 'Orçamento') !!}
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">R$</span>
					</div>
					{!! Form::number('orcamento', null, ['class' => 'form-control', 'step' => 'any']) !!}
				</div>
				<span class="form-text">Define o orçamento informado para este projeto.</span>
			</div>
			<div class="col-lg-4">
				{!! Form::label('dt_contrato', 'Data do Contrato') !!}
				{!! Form::date('dt_contrato', null, ['class' => 'form-control']) !!}
			</div>
		</div>

		<div class="row form-group">
			<div class="col-lg-4">
				{!! Form::label('dt_inicio', 'Data início') !!}
				{!! Form::date('dt_inicio', null, ['class' => 'form-control']) !!}
			</div>
			<div class="col-lg-4">
				{!! Form::label('dt_prev_entrega', 'Previsão de Entrega') !!}
				{!! Form::date('dt_prev_entrega', null, ['class' => 'form-control']) !!}
			</div>
			<div class="col-lg-4">
				{!! Form::label('dt_fim', 'Data de Entrega Real') !!}
				{!! Form::date('dt_fim', null, ['class' => 'form-control']) !!}
			</div>
		</div>
	@endcomponent

	@if ( ! isset($projeto))
		@component('hive::components.card', ['title' => 'Ambientes'])

			<div class="mb-3">
				@component('hive::components.alerts.info')
					Abaixo estão listados os ambientes cadastrados no sistema. Por favor, selecione a quantidade de ambiente que você irá utilizar neste projeto. Após selecionada, clique em "Salvar". O sistema irá calcular as etapas de acordo com a quantidade de ambientes selecionados.
				@endcomponent
			</div>

			@foreach(App\Ambiente::ordenado()->get()->chunk(4) as $row)
				<div class="row form-group">
					@foreach($row as $ambiente)
						<div class="col-lg-3">
							{!! Form::label('ambiente[' . $ambiente->id . ']', $ambiente->nome) !!}
							{!! Form::number('ambiente[' . $ambiente->id . ']', 0, ['class' => 'form-control', 'min' => 0]) !!}
							<span class="form-text">Informe a quantidade referente ao <strong class="text-danger">ambiente {{ $ambiente->nome }}</strong>.</span>
						</div>
					@endforeach
				</div>
			@endforeach
		@endcomponent
	@else
		@component('hive::components.alerts.warning')
			Para editar os ambientes deste projeto, utilize o menu <strong>ambientes</strong> <a href="{{ url($projeto->path()) }}">dentro da página do projeto</a>.
		@endcomponent
	@endif

	@include('hive::components.form-footer', ['button' => $submit_button_text])
</div>
  