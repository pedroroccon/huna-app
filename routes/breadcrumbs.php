<?php

// Clientes
Breadcrumbs::register('cliente', function ($b) {
    $b->parent('hello-home');
    $b->push('Clientes', url(config('hello.url') . '/cliente'));
});
Breadcrumbs::register('cliente-create', function ($b) {
    $b->parent('cliente');
    $b->push('Adicionar', url(config('hello.url') . '/cliente/create'));
});
Breadcrumbs::register('cliente-show', function ($b, $cliente) {
    $b->parent('cliente');
    $b->push($cliente->nome, url($cliente->path()));
});
Breadcrumbs::register('cliente-edit', function ($b, $cliente) {
    $b->parent('cliente-show', $cliente);
    $b->push('Editar', url($cliente->path() . '/edit'));
});

// Cliente, endereço
Breadcrumbs::register('cliente-endereco', function ($b, $cliente) {
    $b->parent('cliente-show', $cliente);
    $b->push('Endereços', url($cliente->path() . '/endereco'));
});
Breadcrumbs::register('cliente-endereco-create', function ($b, $cliente) {
    $b->parent('cliente-endereco', $cliente);
    $b->push('Adicionar', url($cliente->path() . '/endereco/create'));
});
Breadcrumbs::register('cliente-endereco-show', function ($b, $cliente, $endereco) {
    $b->parent('cliente-endereco', $cliente);
    $b->push($endereco->titulo ?? 'Não definido', url($endereco->path()));
});
Breadcrumbs::register('cliente-endereco-edit', function ($b, $cliente, $endereco) {
    $b->parent('cliente-endereco-show', $cliente, $endereco);
    $b->push('Editar', url($endereco->path() . '/edit'));
});

// Cliente, telefone
Breadcrumbs::register('cliente-telefone', function ($b, $cliente) {
    $b->parent('cliente-show', $cliente);
    $b->push('Telefones', url($cliente->path() . '/telefone'));
});
Breadcrumbs::register('cliente-telefone-create', function ($b, $cliente) {
    $b->parent('cliente-telefone', $cliente);
    $b->push('Adicionar', url($cliente->path() . '/telefone/create'));
});
Breadcrumbs::register('cliente-telefone-show', function ($b, $cliente, $telefone) {
    $b->parent('cliente-telefone', $cliente);
    $b->push($telefone->fone, url($telefone->path()));
});
Breadcrumbs::register('cliente-telefone-edit', function ($b, $cliente, $telefone) {
    $b->parent('cliente-telefone-show', $cliente, $telefone);
    $b->push('Editar', url($telefone->path() . '/edit'));
});

// Cliente, email
Breadcrumbs::register('cliente-email', function ($b, $cliente) {
    $b->parent('cliente-show', $cliente);
    $b->push('E-mails', url($cliente->path() . '/email'));
});
Breadcrumbs::register('cliente-email-create', function ($b, $cliente) {
    $b->parent('cliente-email', $cliente);
    $b->push('Adicionar', url($cliente->path() . '/email/create'));
});
Breadcrumbs::register('cliente-email-show', function ($b, $cliente, $email) {
    $b->parent('cliente-email', $cliente);
    $b->push($email->email, url($email->path()));
});
Breadcrumbs::register('cliente-email-edit', function ($b, $cliente, $email) {
    $b->parent('cliente-email-show', $cliente, $email);
    $b->push('Editar', url($email->path() . '/edit'));
});

// Responsáveis
Breadcrumbs::register('responsavel', function ($b) {
    $b->parent('hello-home');
    $b->push('Responsável', url(config('hello.url') . '/responsavel'));
});
Breadcrumbs::register('responsavel-create', function ($b) {
    $b->parent('responsavel');
    $b->push('Adicionar', url(config('hello.url') . '/responsavel/create'));
});
Breadcrumbs::register('responsavel-show', function ($b, $responsavel) {
    $b->parent('responsavel');
    $b->push($responsavel->nome, url($responsavel->path()));
});
Breadcrumbs::register('responsavel-edit', function ($b, $responsavel) {
    $b->parent('responsavel-show', $responsavel);
    $b->push('Editar', url($responsavel->path() . '/edit'));
});

// Ambientes
Breadcrumbs::register('ambiente', function ($b) {
    $b->parent('hello-home');
    $b->push('Ambientes', url(config('hello.url') . '/ambiente'));
});
Breadcrumbs::register('ambiente-create', function ($b) {
    $b->parent('ambiente');
    $b->push('Adicionar', url(config('hello.url') . '/ambiente/create'));
});
Breadcrumbs::register('ambiente-show', function ($b, $ambiente) {
    $b->parent('ambiente');
    $b->push($ambiente->nome, url($ambiente->path()));
});
Breadcrumbs::register('ambiente-edit', function ($b, $ambiente) {
    $b->parent('ambiente-show', $ambiente);
    $b->push('Editar', url($ambiente->path() . '/edit'));
});

// Projetos
Breadcrumbs::register('projeto', function ($b) {
    $b->parent('hello-home');
    $b->push('Projetos', url(config('hello.url') . '/projeto'));
});
Breadcrumbs::register('projeto-create', function ($b) {
    $b->parent('projeto');
    $b->push('Adicionar', url(config('hello.url') . '/projeto/create'));
});
Breadcrumbs::register('projeto-show', function ($b, $projeto) {
    $b->parent('projeto');
    $b->push($projeto->nome, url($projeto->path()));
});
Breadcrumbs::register('projeto-edit', function ($b, $projeto) {
    $b->parent('projeto-show', $projeto);
    $b->push('Editar', url($projeto->path() . '/edit'));
});

// Projetos, ambientes
Breadcrumbs::register('projeto-ambiente', function ($b, $projeto) {
    $b->parent('projeto', $projeto);
    $b->push('Ambientes do projeto', url($projeto->path() . '/ambiente'));
});
Breadcrumbs::register('projeto-ambiente-create', function ($b, $projeto) {
    $b->parent('projeto-ambiente', $projeto);
    $b->push('Adicionar', url($projeto->path() . '/ambiente/create'));
});
Breadcrumbs::register('projeto-ambiente-show', function ($b, $projeto, $ambiente) {
    $b->parent('projeto-ambiente', $projeto);
    $b->push($ambiente->nome, url($ambiente->path()));
});
Breadcrumbs::register('projeto-ambiente-edit', function ($b, $projeto, $ambiente) {
    $b->parent('projeto-ambiente-show', $projeto, $ambiente);
    $b->push('Editar', url($ambiente->path() . '/edit'));
});

// Projetos, ambientes, etapas
Breadcrumbs::register('projeto-ambiente-etapa', function ($b, $projeto, $ambiente) {
    $b->parent('projeto-ambiente-show', $projeto, $ambiente);
    $b->push('Etapas', url($ambiente->path() . '/etapa'));
});
Breadcrumbs::register('projeto-ambiente-etapa-create', function ($b, $projeto, $ambiente) {
    $b->parent('projeto-ambiente-etapa', $projeto, $ambiente);
    $b->push('Adicionar', url($ambiente->path() . '/etapa/create'));
});
Breadcrumbs::register('projeto-ambiente-etapa-show', function ($b, $projeto, $ambiente, $etapa) {
    $b->parent('projeto-ambiente-etapa', $projeto, $ambiente);
    $b->push($etapa->nome, url($etapa->path()));
});
Breadcrumbs::register('projeto-ambiente-etapa-edit', function ($b, $projeto, $ambiente, $etapa) {
    $b->parent('projeto-ambiente-etapa-show', $projeto, $ambiente, $etapa);
    $b->push('Editar', url($etapa->path() . '/edit'));
});

// Projetos, ambientes, etapas, itens
Breadcrumbs::register('projeto-ambiente-etapa-item', function ($b, $projeto, $ambiente, $etapa) {
    $b->parent('projeto-ambiente-etapa-show', $projeto, $ambiente, $etapa);
    $b->push('Itens da etapa', url($etapa->path() . '/item'));
});
Breadcrumbs::register('projeto-ambiente-etapa-item-create', function ($b, $projeto, $ambiente, $etapa) {
    $b->parent('projeto-ambiente-etapa-item', $projeto, $ambiente, $etapa);
    $b->push('Adicionar', url($etapa->path() . '/item/create'));
});
Breadcrumbs::register('projeto-ambiente-etapa-item-show', function ($b, $projeto, $ambiente, $etapa, $item) {
    $b->parent('projeto-ambiente-etapa-item', $projeto, $ambiente, $etapa);
    $b->push($item->titulo, url($item->path()));
});
Breadcrumbs::register('projeto-ambiente-etapa-item-edit', function ($b, $projeto, $ambiente, $etapa, $item) {
    $b->parent('projeto-ambiente-etapa-item-show', $projeto, $ambiente, $etapa, $item);
    $b->push('Editar', url($item->path() . '/edit'));
});

// Projeto, relatórios
Breadcrumbs::register('projeto-relatorio-visao-geral', function ($b) {
    $b->parent('projeto');
    $b->push('Visão geral', url(config('hello.url') . '/projeto/relatorio/visao-geral'));
});