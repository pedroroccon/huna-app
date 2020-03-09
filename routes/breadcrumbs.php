<?php

Breadcrumbs::register('cliente', function ($b) {
    $b->parent('hello-home');
    $b->push('Clientes', url(config('hello.url') . '/cliente'));
});

Breadcrumbs::register('cliente-show', function ($b, $cliente) {
    $b->parent('cliente');
    $b->push($cliente->nome, url($cliente->path()));
});