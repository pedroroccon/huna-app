<div class="container-fluid">
    
    @component('hive::components.card', ['title' => 'Informações gerais'])
        <div class="row form-group">
            <div class="col-lg-8">
                {!! Form::label('nome', 'Nome da etapa') !!}
                {!! Form::text('nome', null, ['class' => 'form-control']) !!}
                <span class="form-text">Informe um nome para a sua etapa.</span>
            </div>
            <div class="col-lg-4">
                {!! Form::label('sequencia', 'Sequência') !!}
                {!! Form::number('sequencia', null, ['class' => 'form-control', 'min' => 0]) !!}
                <span class="form-text">Informe a sequência desta etapa. <span class="text-danger">A sequência define a ordem das etapas de um determinado ambiente</span>.</span>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-12">
                {!! Form::label('descricao', 'Descrição') !!}
                {!! Form::textarea('descricao', null, ['class' => 'form-control', 'rows' => 3]) !!}
                <span class="form-text">Informe uma descrição para a sua etapa. <span class="text-danger">Este campo é opcional</span>.</span>
            </div>
        </div>
    @endcomponent

    @component('hive::components.card', ['title' => 'Apontamentos'])
        <div class="row form-group">
            <div class="col-lg-5">
                {!! Form::label('responsavel_id', 'Responsável pela etapa') !!}
                {!! Form::select('responsavel_id', [
                    '' => 'Não definido', 
                ] + App\Responsavel::ordenado()->pluck('nome', 'id')->toArray(), null, ['class' => 'form-control']) !!}
                <span class="form-text">Informe um responsável pela etapa do processo. <span class="text-danger">Deixe em branco caso ainda não tenha definido um responsável por esta etapa.</span></span>
            </div>
            <div class="col-lg-3">
                {!! Form::label('inicio_em', 'Iniciado em') !!}
                {!! Form::date('inicio_em', null, ['class' => 'form-control']) !!}
                <span class="form-text">Defina a data de início desta etapa. <span class="text-danger">Você pode deixar este campo em branco caso ainda não tenha iniciado a etapa</span>.</span>
            </div>
            <div class="col-lg-3">
                {!! Form::label('termino_em', 'Finalizado em') !!}
                {!! Form::date('termino_em', null, ['class' => 'form-control']) !!}
                <span class="form-text">Defina a data de término desta etapa. <span class="text-danger">Você pode deixar este campo em branco caso ainda não tenha terminado a etapa</span>.</span>
            </div>
        </div>
    @endcomponent

    <!-- Submit -->
	@include('hive::components.form-footer', ['button' => $submit_button_text])

</div>