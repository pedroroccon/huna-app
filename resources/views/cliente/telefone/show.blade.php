@extends('layouts.app')
@section('content')

	<div class="container">
		<h1 class="mt-5">Telefone {{ $telefone->fone }}</h1>
		<div class="card card-body shadow-lg my-4">
	      <div class="row">
	        <div class="col-lg-7">
	          <span><strong>Telefone</strong><br> {{ $telefone->fone }}</span>
	        </div>
	      </div>
	    </div>
	</div>

@endsection
