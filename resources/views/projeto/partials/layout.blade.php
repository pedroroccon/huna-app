@extends('hive::layouts.main')

@section('content')

    <!-- Headers -->
    @yield('s-header')

    <div class="container-fluid">
        <!-- Toolbar -->
        @include('projeto.partials.navbar')
    </div>

    <!-- Conteúdo -->
    @yield('s-content')

    <!-- Modals -->
    @include('projeto.partials.ambiente')
    
@endsection