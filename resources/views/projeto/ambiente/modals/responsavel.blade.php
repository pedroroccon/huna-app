@component('hive::components.modals', ['id' => 'm-responsavel', 'title' => 'Alterar responsável'])
	{!! Form::open(['url' => '', 'method' => 'post', 'class' => 'hello-form']) !!}
        <div class="modal-body">
            <div class="row form-group">
                <div class="col-lg-12">
                    {!! Form::label('responsavel_id', 'Selecione um responsável') !!}
                    {!! Form::select('responsavel_id', [
                        '' => 'Não definido', 
                    ] + App\Responsavel::ordenado()->pluck('nome', 'id')->toArray(), null, ['class' => 'form-control']) !!}
                    <span class="form-text">Informe um responsável pela etapa do processo.</span>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            {!! Form::submit('Adicionar responsável', ['class' => 'btn btn-success']) !!}
        </div>
	{!! Form::close() !!}
@endcomponent