@extends('hive::layouts.main')
@section('title', 'Visão geral - Projetos')
@section('content')

<!-- Header -->
@include('hive::components.title', ['page_title' => 'Visão geral - Projetos'])

<!-- Breadcrumbs -->
@include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('projeto-relatorio-visao-geral')])

<div class="container-fluid">
    @foreach($projetos as $projeto)
        @component('hive::components.card', ['title' => $projeto->nome])
            @foreach($projeto->ambientes as $ambiente)
                <table class="table table-bordered hello-table hello-table-no-wrap mb-4">
                    <thead>
                        <tr>
                            <th colspan="10">{{ $ambiente->nome }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach($ambiente->etapas as $etapa)
                                <td><a href="{{ url($etapa->ambiente->path()) }}">{{ $etapa->nome }}</a><br><small class="text-muted">{{ ! empty($etapa->responsavel) ? $etapa->responsavel->nome : 'N/D' }}</small></td>
                                <td class="text-center text-white {{ $etapa->concluida() ? 'bg-success' : 'bg-danger' }}">{!! $etapa->concluida() ? '<i class="far fa-check-circle fa-fw"></i>' : '<i class="far fa-times-circle fa-fw"></i>' !!}</td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            @endforeach
        @endcomponent
    @endforeach
</div>

@endsection
