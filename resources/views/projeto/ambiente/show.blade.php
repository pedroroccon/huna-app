@extends('projeto.partials.layout')
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

        <div class="card">
            <div class="card-body">
                @if($etapas->count())
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="{{ url($ambiente->path() . '/etapa') }}" class="btn btn-primary btn-sm">Gerenciar etapas</a>
                            <hr>
                            <div class="table-responsive">
                                <table class="table hello-table hello-table-no-wrap mb-0">
                                    <thead>
                                        <tr>
                                            <th>Etapa</th>
                                            <th>Início</th>
                                            <th>Término</th>
                                            <th>Status</th>
                                            <th>Responsável</th>
                                            <th class="hello-table-action">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($etapas as $indice => $etapa)
                                            <tr>
                                                <td><a href="{{ url($etapa->path()) }}"><strong>{{ $etapa->nome }}</strong></a></td>
                                                <td>{!! ! empty($etapa->inicio_em) ? $etapa->inicio_em->format('d/m/Y') : '<span class="text-muted">Não informado</span>' !!}</td>
                                                <td>{!! ! empty($etapa->termino_em) ? $etapa->termino_em->format('d/m/Y') : '<span class="text-muted">Não informado</span>' !!}</td>
                                                <td>{!! $etapa->concluida() ? 'Concluído' : 'Em processo' !!}</td>
                                                <td>{{ ! empty($etapa->responsavel) ? $etapa->responsavel->nome : 'Não atrelado' }}</td>
                                                <td class="hello-table-action">
                                                    {!! Form::open(['url' => $etapa->path(), 'method' => 'delete']) !!}
                                                        @if ((isset($etapas[$indice - 1]) and ! $etapas[$indice]->concluida() and $etapas[$indice -1]->concluida()) or ($etapa->sequencia == 1 and empty($etapa->termino_em)))
                                                            <a class="btn btn-sm btn-link" data-toggle="modal" data-target="#m-inicio" title="Iniciar" data-url="{{ url($etapa->path() . '/iniciar') }}" data-etapa="{{ $etapa->nome }}" href="#"><i class="far fa-play-circle fa-fw"></i></a>
                                                            <a class="btn btn-sm btn-link" data-toggle="modal" data-target="#m-termino" title="Encerrar" data-url="{{ url($etapa->path() . '/encerrar') }}" data-etapa="{{ $etapa->nome }}" href="#"><i class="far fa-check-circle fa-fw"></i></a>
                                                        @endif
                                                        <a class="btn btn-sm btn-link" data-toggle="modal" data-target="#m-responsavel" title="Responsável" data-url="{{ url($etapa->path() . '/responsavel') }}" data-etapa="{{ $etapa->nome }}" href="#"><i class="fas fa-user-check fa-sm"></i></a>
                                                        <a class="btn btn-sm btn-link" data-toggle="tooltip" title="Editar" href="{{ url($etapa->path() . '/edit') }}"><i class="fas fa-pencil-alt fa-sm"></i></a>
                                                        <button class="btn btn-sm btn-link btn-confirm-delete" data-toggle="tooltip" title="Remover" type="submit"><i class="fas fa-trash fa-sm text-danger"></i></button>
                                                    {!! Form::close() !!}
                                                </td>
                                            </tr>
                                            @if ($etapa->itens)
                                                @foreach($etapa->itens as $item)
                                                    <tr>
                                                        <td colspan="3">{{ $item->titulo }}</td>
                                                        <td colspan="2">{!! $item->concluido() ? $item->concluido_em->format('d/m/Y') . '<br><small class="text-muted">' . $item->concluido_em->diffForHumans() . '</small>' : '<span class="text-muted">Não concluído</span>' !!}</td>
                                                        <td class="hello-table-action">
                                                            @if ($item->concluido())
                                                                <a class="btn btn-sm btn-link" title="Desconcluir" href="{{ url($item->path() . '/desconcluir') }}"><i class="far fa-times-circle fa-fw"></i></a>
                                                            @else
                                                                <a class="btn btn-sm btn-link" title="Concluir" href="{{ url($item->path() . '/concluir') }}"><i class="far fa-check-circle fa-fw"></i></a>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @else
                    @include('hive::components.no-results')
                @endif
            </div>

        </div>
    </div>

    <!-- Modals -->
    @include('projeto.ambiente.modals.responsavel')
    @include('projeto.ambiente.modals.inicio')
    @include('projeto.ambiente.modals.termino')

@endsection

@section('script')

<script type="application/javascript">
    $(function() {
        
        $('#m-responsavel').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); 
            var url = button.data('url'); 
            var etapa = button.data('etapa');
            var modal = $(this)
            modal.find('.modal-title').text('Definir responsável para a etapa ' + etapa)
            modal.find('form').attr('action', url);
        });

        $('#m-inicio').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); 
            var url = button.data('url'); 
            var etapa = button.data('etapa');
            var modal = $(this)
            modal.find('.modal-title').text('Definir início para a etapa ' + etapa)
            modal.find('form').attr('action', url);
        });

        $('#m-termino').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); 
            var url = button.data('url'); 
            var etapa = button.data('etapa');
            var modal = $(this)
            modal.find('.modal-title').text('Definir término para a etapa ' + etapa)
            modal.find('form').attr('action', url);
        });

    });
</script>

@endsection