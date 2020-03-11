<div class="container-fluid">

	@component('hive::components.card', ['title' => 'Informações básicas'])
		<div class="row form-group">
			<div class="col-lg-12">
				{!! Form::label('titulo', 'Título do endereço') !!}
				{!! Form::text('titulo', null, ['class' => 'form-control']) !!}
				<span class="form-text">Informe um título para o seu endereço. Ex: Casa, Comercial, Trabalho, etc...</span>
			</div>
		</div>
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
				{!! Form::label('estado', 'Estado') !!}
				{!! Form::select('estado', ['Por favor, selecione...'] + \Pedroroccon\Localidade\Estado::ordenado()->pluck('titulo', 'sigla')->toArray(), null, ['class' => 'form-control']) !!}
			</div>
		</div>
		<div class="row form-group">
			<div class="col-lg-3">
				{!! Form::label('cep', 'Cep') !!}
				{!! Form::text('cep', null, ['class' => 'form-control']) !!}
				<span class="form-text">Informe o CEP (Somente números).</span>
			</div>
		</div>
	@endcomponent

	@include('hive::components.form-footer', ['button' => $submit_button_text])
</div>
