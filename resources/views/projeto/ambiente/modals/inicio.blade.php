@component('hive::components.modals', ['id' => 'm-inicio', 'title' => 'Alterar responsável'])
	{!! Form::open(['url' => '', 'method' => 'post', 'class' => 'hello-form']) !!}
        <div class="modal-body">
            <div class="row form-group">
                <div class="col-lg-12">
                    {!! Form::label('inicio_em', 'Informe a data de início do processo') !!}
                    {!! Form::date('inicio_em', today(), ['class' => 'form-control']) !!}
                    <span class="form-text">Informe a data de início da etapa.</span>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            {!! Form::submit('Indicar início', ['class' => 'btn btn-success']) !!}
        </div>
	{!! Form::close() !!}
@endcomponent