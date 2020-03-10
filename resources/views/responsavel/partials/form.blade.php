<div class="container-fluid">

	@component('hive::components.card', ['title' => 'Informações básicas'])
		<div class="row form-group">
			<div class="col-lg-7">
				{!! Form::label('nome', 'Nome completo') !!}
				{!! Form::text('nome', null, ['class' => 'form-control']) !!}
			</div>
			<div class="col-lg-5">
				{!! Form::label('cargo', 'Cargo') !!}
				{!! Form::text('cargo', null, ['class' => 'form-control']) !!}
			</div>
		</div>
		<div class="row form-group">
			<div class="col-lg-5">
				{!! Form::label('celular', 'Celular') !!}
				{!! Form::text('celular', null, ['class' => 'form-control']) !!}
			</div>
			<div class="col-lg-5">
				{!! Form::label('email', 'E-mail') !!}
				{!! Form::text('email', null, ['class' => 'form-control']) !!}
			</div>
		</div>
	@endcomponent

	@include('hive::components.form-footer', ['button' => $submit_button_text])
</div>

