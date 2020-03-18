@extends('projeto.partials.layout')
@section('title', $etapa->nome . ' - Etapas - ' . $ambiente->nome . ' - Ambientes - ' . $projeto->nome . ' - Projetos')
@section('s-header')
    <!-- Header -->
    @include('hive::components.title', ['page_title' => $etapa->nome . ' - Etapas - ' . $ambiente->nome . ' - Ambientes - ' . $projeto->nome . ' - Projetos', 'page_button' => ['Editar', $etapa->path() . '/edit']])
    <!-- Breadcrumbs -->
    @include('hive::components.breadcrumbs', ['breadcrumb' => Breadcrumbs::render('projeto-ambiente-etapa-show', $projeto, $ambiente, $etapa)])
@endsection

@section('s-content')
    <div class="container-fluid">
        @component('hive::components.card', ['title' => 'Informações da etapa'])
            <div class="row">
                <div class="col-lg-8">
                    @component('hive::components.param', ['title' => 'Nome da etapa'])
                        {{ $etapa->nome }}
                    @endcomponent
                </div>
                <div class="col-lg-4">
                    @component('hive::components.param', ['title' => 'Sequência'])
                        {{ $etapa->sequencia }}
                    @endcomponent
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    @component('hive::components.param', ['title' => 'Descrição'])
                        {!! $etapa->descricao ??  '<span class="text-muted">Descrição não fornecida</span>' !!}
                    @endcomponent
                </div>
            </div>
        @endcomponent

        @component('hive::components.card', ['title' => 'Apontamentos'])
            <div class="row">
                <div class="col-lg-4">
                    @component('hive::components.param', ['title' => 'Responsável'])
                        {{ ! empty($etapa->responsavel) ? $etapa->responsavel->nome : 'Não definido' }}
                    @endcomponent
                </div>
                <div class="col-lg-4">
                    @component('hive::components.param', ['title' => 'Iniciada em'])
                        {{ ! empty($etapa->inicio_em) ? $etapa->inicio_em->format('d/m/Y') : 'Não iniciada' }}
                    @endcomponent
                </div>
                <div class="col-lg-4">
                    @component('hive::components.param', ['title' => 'Finalizada em'])
                        {{ ! empty($etapa->termino_em) ? $etapa->termino_em->format('d/m/Y') : 'Não iniciada' }}
                    @endcomponent
                </div>
            </div>
        @endcomponent
    </div>
@endsection