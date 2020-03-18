@extends('projeto.partials.layout')
@section('title', $item->titulo . ' - Itens - '. $etapa->nome . ' - Etapas - ' . $ambiente->nome . ' - Ambientes - ' . $projeto->nome . ' - Projetos')
@section('s-header')
    <!-- Header -->
    @include('hive::components.title', ['page_title' => $item->titulo . ' - Itens - '. $etapa->nome . ' - Etapas - ' . $ambiente->nome . ' - Ambientes - ' . $projeto->nome . ' - Projetos'])
    <!-- Breadcrumbs -->
    @include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('projeto-ambiente-etapa-item-show', $projeto, $ambiente, $etapa, $item)])
@endsection

@section('s-content')
    <div class="container-fluid">
        @component('hive::components.card', ['title' => 'Informações do item'])
            <div class="row">
                <div class="col-lg-12">
                    @component('hive::components.param', ['title' => 'Título do item'])
                        {{ $item->titulo }}
                    @endcomponent
                </div>
            </div>
        @endcomponent
    </div>
@endsection