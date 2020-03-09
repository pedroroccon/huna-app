

<div class="row form-group">

  <div class="col-lg-7">
    {!! Form::label('nome', 'Nome completo') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
  </div>

  <div class="col-lg-5">
    {!! Form::label('cargo', 'Cargo') !!}
    {!! Form::text('cargo', null, ['class' => 'form-control']) !!}
  </div>
  <div class="col-lg-5">
    {!! Form::label('celular', 'Celular') !!}
    {!! Form::text('celular', null, ['class' => 'form-control']) !!}
  </div>
  <div class="col-lg-5">
    {!! Form::label('email', 'E-mail') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-success']) !!}
  </div>
</div>
