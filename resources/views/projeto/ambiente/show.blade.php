@extends('hive::layouts.main')
@section('title', $ambiente->nome . ' - Ambientes - ' . $projeto->nome . ' - Projetos')
@section('s-header')
    <!-- Header -->
    @include('hive::components.title', ['page_title' => $ambiente->nome . ' Ambientes - ' . $projeto->nome . ' - Projetos'])
    <!-- Breadcrumbs -->
    @include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('projeto-ambiente-show', $projeto, $ambiente)])
@endsection

@section('s-content')
    <div class="container-fluid">
        @component('hive::components.card', ['title' => 'Informações do ambiente'])
            <div class="row">
                <div class="col-lg-12">
                    @component('hive::components.param', ['title' => 'Nome do ambiente'])
                        {{ $ambiente->nome }}
                    @endcomponent
                </div>
            </div>
        @endcomponent
    </div>
@endsection
