<div class="row form-group">
	<div class="col-lg-12">
		{!! Form::label('rua', 'Rua') !!}
		{!! Form::text('rua', null, ['class' => 'form-control']) !!}
		{!! Form::label('numero', 'Numero') !!}
		{!! Form::text('numero', null, ['class' => 'form-control']) !!}
		{!! Form::label('complemento', 'Complemento') !!}
		{!! Form::text('complemento', null, ['class' => 'form-control']) !!}
		{!! Form::label('bairro', 'Bairro') !!}
		{!! Form::text('bairro', null, ['class' => 'form-control']) !!}
		{!! Form::label('cidade', 'Cidade') !!}
		{!! Form::text('cidade', null, ['class' => 'form-control']) !!}
		{!! Form::label('cep', 'Cep') !!}
		{!! Form::text('cep', null, ['class' => 'form-control']) !!}
	</div>
</div>
<div class="row form-group">
	<div class="col-lg-12">
		{!! Form::submit('Salvar', ['class' => 'btn btn-success']) !!}
	</div>
</div>
