<div class="container-fluid">

	@component('hive::components.card', ['title' => 'Informações básicas'])
		<div class="row form-group">
			<div class="col-lg-12">
				{!! Form::label('fone', 'Telefone') !!}
				{!! Form::text('fone', null, ['class' => 'form-control']) !!}
			</div>
		</div>
	@endcomponent

	@include('hive::components.form-footer', ['button' => $submit_button_text])
</div>

