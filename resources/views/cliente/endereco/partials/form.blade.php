<div class="container-fluid">

	@component('hive::components.card', ['title' => 'Informações básicas'])
		<div class="row form-group">
			<div class="col-lg-7">
				{!! Form::label('rua', 'Rua') !!}
				{!! Form::text('rua', null, ['class' => 'form-control']) !!}
			</div>
			<div class="col-lg-5">
				{!! Form::label('numero', 'Numero') !!}
				{!! Form::text('numero', null, ['class' => 'form-control']) !!}
			</div>
		</div>
		<div class="row form-group">
			<div class="col-lg-12">
				{!! Form::label('complemento', 'Complemento') !!}
				{!! Form::text('complemento', null, ['class' => 'form-control']) !!}
			</div>
		</div>
		<div class="row form-group">
			<div class="col-lg-5">
				{!! Form::label('bairro', 'Bairro') !!}
				{!! Form::text('bairro', null, ['class' => 'form-control']) !!}
			</div>
			<div class="col-lg-4">
				{!! Form::label('cidade', 'Cidade') !!}
				{!! Form::text('cidade', null, ['class' => 'form-control']) !!}
			</div>
			<div class="col-lg-3">
				{!! Form::label('cep', 'Cep') !!}
				{!! Form::text('cep', null, ['class' => 'form-control']) !!}
			</div>
		</div>
	@endcomponent

	@include('hive::components.form-footer', ['button' => $submit_button_text])
</div>
