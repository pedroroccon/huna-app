<div class="container-fluid">

    @component('hive::components.card', ['title' => 'Informações gerais'])
        <div class="row form-group">
            <div class="col-lg-12">
                {!! Form::label('titulo', 'Título do item') !!}
                {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
                <span class="form-text">Por favor, informe o título do item referente a etapa.</span>
            </div>
        </div>
    @endcomponent

    <!-- Submit -->
	@include('hive::components.form-footer', ['button' => $submit_button_text])

</div>