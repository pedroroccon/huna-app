<div class="container-fluid">
	
	@component('hive::components.card', ['title' => 'Informações básicas'])
		<div class="row form-group">
			<div class="col-lg-12">
				{!! Form::label('nome', 'Nome do ambiente') !!}
				{!! Form::text('nome', null, ['class' => 'form-control']) !!}
				<span class="form-text">Informe um nome para o ambiente do projeto. <strong class="text-danger">Este ambiente será atrelado somente neste projeto</strong>.</span>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-lg-12">
				{!! Form::label('descricao', 'Descrição do ambiente') !!}
				{!! Form::textarea('descricao', null, ['class' => 'form-control']) !!}
				<span class="form-text">Informe uma descrição para este ambiente. A descrição pode ser utilizada para identificar melhor o ambiente.</span>
			</div>
		</div>
	@endcomponent

	@include('hive::components.form-footer', ['button' => $submit_button_text])
</div>