@extends('layouts.app')
@section('content')

	<div class="container">
		<h1 class="mt-5">Endereço {{ $endereco->endereco }}</h1>
		<div class="card card-body shadow-lg my-4">
	      <div class="row">
	        <div class="col-lg-7">
	          <span><strong>Endereço</strong><br> {{ $endereco->endereco }}</span>
	        </div>
	      </div>
	    </div>
	</div>

@endsection
