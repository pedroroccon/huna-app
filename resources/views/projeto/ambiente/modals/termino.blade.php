@component('hive::components.modals', ['id' => 'm-termino', 'title' => 'Alterar responsável'])
	{!! Form::open(['url' => '', 'method' => 'post', 'class' => 'hello-form']) !!}
        <div class="modal-body">
            <div class="row form-group">
                <div class="col-lg-12">
                    {!! Form::label('termino_em', 'Informe a data de início do processo') !!}
                    {!! Form::date('termino_em', today(), ['class' => 'form-control']) !!}
                    <span class="form-text">Informe a data de término da etapa.</span>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            {!! Form::submit('Indicar término', ['class' => 'btn btn-success']) !!}
        </div>
	{!! Form::close() !!}
@endcomponent