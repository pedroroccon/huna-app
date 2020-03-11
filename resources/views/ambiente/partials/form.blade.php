<div class="container-fluid">

	@component('hive::components.card', ['title' => 'Informações básicas'])
		<div class="row form-group">
			<div class="col-lg-4">
				{!! Form::label('nome', 'Nome do ambiente') !!}
				{!! Form::text('nome', null, ['class' => 'form-control']) !!}
				<span class="form-text">Informe um nome para este ambiente. O nome define como o ambiente deverá ser chamado dentro da aplicação.</span>
			</div>
		</div>
	@endcomponent

	@component('hive::components.card', ['title' => 'Informações adicionais'])
		<div class="row form-group">
			<div class="col-lg-12">
				{!! Form::label('descricao', 'Descrição do ambiente') !!}
				{!! Form::textarea('descricao', null, ['class' => 'form-control']) !!}
				<span class="form-text">Informe uma breve descrição para este ambiente. <span class="text-success">Este campo é opcional</span>.</span>
			</div>
		</div>
	@endcomponent

	@include('hive::components.form-footer', ['button' => $submit_button_text])
</div>

