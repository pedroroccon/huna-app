

<div class="row form-group">

  <div class="col-lg-7">
    {!! Form::label('etapa', 'Selecione a sua etapa') !!}
    {!! Form::select('etapa', [
      'Por favor, selecione...',
      'App\\EtapaMedicao' => 'Medição', 
      'App\\EtapaDesenho' => 'Desenho', 
      'App\\EtapaEncomendamaterial' => 'Encomenda de Material', 
      'App\\EtapaProducao' => 'Produção', 
      'App\\EtapaPremontagem' => 'Pré-montagem', 
      'App\\Montagem' => 'Montagem', 
    ], null, ['class' => 'form-control']) !!}
  </div>
  <div class="col-lg-5">
    {!! Form::label('responsavel_id', 'Responsável') !!}
    {!! Form::select('responsavel_id', [
      '' => 'Por favor, selecione...', 
    ] + App\Responsavel::orderBy('nome')->pluck('nome', 'id')->toArray(), null, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="row form-group">
  <div class="col-lg-3">
    {!! Form::label('dt_inicio', 'Data de início') !!}
    {!! Form::date('dt_inicio', null, ['class' => 'form-control']) !!}
  </div>
  <div class="col-lg-3">
    {!! Form::label('dt_fim', 'Data de término') !!}
    {!! Form::date('dt_fim', null, ['class' => 'form-control']) !!}
  </div>
  <div class="col-lg-3">
    {!! Form::label('dt_avaliacao', 'Data da avaliação') !!}
    {!! Form::date('dt_avaliacao', null, ['class' => 'form-control']) !!}
  </div>
  <div class="col-lg-3">
    {!! Form::label('dt_aprovacao', 'Data da aprovação') !!}
    {!! Form::date('dt_aprovacao', null, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="row form-group">
  <div class="col-lg-12">
    {!! Form::label('comentario', 'Comentários') !!}
    {!! Form::textarea('comentario', null, ['class' => 'form-control', 'rows' => 5]) !!}
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-success']) !!}
  </div>
</div>
