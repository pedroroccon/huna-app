@extends('hive::layouts.main')
@section('title', 'Editar - ' . $item->titulo . '  - Itens - ' . $etapa->nome . ' - Etapas - ' . $ambiente->nome . ' - Ambientes - ' . $projeto->nome . ' - Projetos')
@section('content')

<!-- Header -->
@include('hive::components.title', ['page_title' => 'Editar - ' . $item->titulo . ' - Itens - ' . $etapa->nome . ' - Etapas - ' . $ambiente->nome . ' - Ambientes - ' . $projeto->nome . ' - Projetos'])

<!-- Breadcrumbs -->
@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('projeto-ambiente-etapa-item-edit', $projeto, $ambiente, $etapa, $item)])

	{!! Form::model($item, ['url' => $item->path(), 'method' => 'patch', 'class' => 'hello-form']) !!}
		@include('projeto.ambiente.etapa.item.partials.form', ['submit_button_text' => 'Salvar'])
	{!! Form::close() !!}

@endsection
