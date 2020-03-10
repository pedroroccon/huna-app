@extends('hive::layouts.main')

@section('content')

    <!-- Headers -->
    @yield('s-header')

    <div class="container-fluid">
        <!-- Toolbar -->
        @include('cliente.partials.navbar')
    </div>

    <!-- Conteúdo -->
    @yield('s-content')

    <!-- Modals -->

@endsection