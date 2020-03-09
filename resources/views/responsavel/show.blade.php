@extends('layouts.app')

@section('content')

	<div class="container">
		<h1 class="mt-5">responsavel, {{ $responsavel->nome }}</h1>

    <div class="card card-body shadow-lg my-4">
      <div class="row">
        <div class="col-lg-7">
          <span><strong>Nome completo</strong><br> {{ $responsavel->nome }}</span>
        </div>
        <div class="col-lg-5">
          <span><strong>Cargo</strong><br> {{ $responsavel->cargo }}</span>
        </div>
				<div class="col-lg-5">
          <span><strong>Celular</strong><br> {{ $responsavel->celular }}</span>
        </div>
				<div class="col-lg-5">
          <span><strong>E-mail</strong><br> {{ $responsavel->email }}</span>
        </div>
      </div>
    </div>

    

@endsection
