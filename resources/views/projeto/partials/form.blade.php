

<div class="row form-group">

  <div class="col-lg-7">
    {!! Form::label('cliente_id', 'Selecione o cliente') !!}
    {!! Form::select('cliente_id', [
      'Por favor, selecione...',
    ] + App\Cliente::orderBy('nome', 'asc')->get()->pluck('nome', 'id')->toArray(), null, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="row form-group">

  <div class="col-lg-4">
    {!! Form::label('nome', 'Nome do projeto') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
  </div>
  <div class="col-lg-4">
    {!! Form::label('orcamento', 'Orçamento') !!}
    {!! Form::number('orcamento', null, ['class' => 'form-control', 'step' => 'any']) !!}
  </div>
  <div class="col-lg-4">
    {!! Form::label('dt_contrato', 'Data do Contrato') !!}
    {!! Form::date('dt_contrato', null, ['class' => 'form-control']) !!}
  </div>
  <div class="col-lg-4">
    {!! Form::label('dt_inicio', 'Data início') !!}
    {!! Form::date('dt_inicio', null, ['class' => 'form-control']) !!}
  </div>
  <div class="col-lg-4">
    {!! Form::label('dt_prev_entrega', 'Data Final - Previsão de Entrega') !!}
    {!! Form::date('dt_prev_entrega', null, ['class' => 'form-control']) !!}
  </div>
  <div class="col-lg-4">
    {!! Form::label('dt_fim', 'Data de Entrega Real') !!}
    {!! Form::date('dt_fim', null, ['class' => 'form-control']) !!}
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-success']) !!}
  </div>
</div>
