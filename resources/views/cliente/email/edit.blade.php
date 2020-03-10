@extends('hive::layouts.main')
@section('title', 'Editar - ' . $email->email . ' - E-mails - ' . $cliente->nome . ' - Clientes')
@section('content')

<!-- Header -->
@include('hive::components.title', ['page_title' => 'Editar - ' . $email->email . ' - E-mails - ' . $cliente->nome . ' - Clientes'])

<!-- Breadcrumbs -->
@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('cliente-email-edit', $cliente, $email)])

{!! Form::model($email, ['url' => $email->path(), 'method' => 'patch', 'class' => 'hello-form']) !!}
	@include('cliente.email.partials.form', ['submit_button_text' => 'Salvar e-mail'])
{!! Form::close() !!}

@endsection
