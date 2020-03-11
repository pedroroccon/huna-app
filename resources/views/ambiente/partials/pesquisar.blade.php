@component('hive::components.modals', ['id' => 'm-pesquisar', 'title' => 'Pesquisar'])
	{!! Form::open(['url' => url()->current(), 'method' => 'GET', 'class' => 'hello-form']) !!}
        <div class="modal-body">
            <div class="row form-group">
                <div class="col">
                    {!! Form::label('keyword', 'Pesquisar') !!}
                    {!! Form::text('keyword', null, ['class' => 'form-control']) !!}
                    <p class="form-text">Digite o termo, ou parte da palavra que deseja pesquisar.</p>
                </div>
            </div>
            <div class="row form-group">
                <div class="col">
                    {!! Form::label('campo', 'Pesquisar em') !!}
                    {!! Form::select('campo', [
                        'auto' => 'Automático', 
                    ], null, ['class' => 'form-control']) !!}
                    <p class="form-text">Selecione em qual campo você deseja pesquisar a sua palavra-chave.</p>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            {!! Form::submit('Pesquisar', ['class' => 'btn btn-primary']) !!}
        </div>
	{!! Form::close() !!}
@endcomponent