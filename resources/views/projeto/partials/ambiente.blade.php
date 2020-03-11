@component('hive::components.modals', ['id' => 'm-ambiente', 'title' => 'Adicionar ambiente'])
	{!! Form::open(['url' => $projeto->path() . '/ambiente', 'method' => 'post', 'class' => 'hello-form']) !!}
        <div class="modal-body">
            <div class="row form-group">
                <div class="col-lg-12">
                    {!! Form::label('nome', 'Nome do ambiente') !!}
                    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
                    <span class="form-text">Informe um nome para o novo ambiente do projeto. <strong class="text-danger">Este ambiente será cadastrado apenas neste projeto</strong>.</span>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-12">
                    {!! Form::label('quantidade', 'Quantidade') !!}
                    {!! Form::number('quantidade', 1, ['class' => 'form-control', 'min' => 1]) !!}
                    <span class="form-text">Informe quantos ambientes serão cadastrados.</span>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            {!! Form::submit('Adicionar ambiente', ['class' => 'btn btn-success']) !!}
        </div>
	{!! Form::close() !!}
@endcomponent