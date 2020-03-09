<div class="row form-group">
	<div class="col-lg-12">
		{!! Form::label('email', 'E-mail') !!}
		{!! Form::text('email', null, ['class' => 'form-control']) !!}
	</div>
</div>
<div class="row form-group">
	<div class="col-lg-12">
		{!! Form::submit('Salvar', ['class' => 'btn btn-success']) !!}
	</div>
</div>
