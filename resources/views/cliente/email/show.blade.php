@extends('layouts.app')
@section('content')

	<div class="container">
		<h1 class="mt-5">E-mail {{ $email->email }}</h1>
		<div class="card card-body shadow-lg my-4">
	      <div class="row">
	        <div class="col-lg-7">
	          <span><strong>E-mail</strong><br> {{ $email->email }}</span>
	        </div>
	      </div>
	    </div>
	</div>

@endsection
