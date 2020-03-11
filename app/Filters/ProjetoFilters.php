<?php

namespace App\Filters;

class ProjetoFilters extends Filters
{
    /**
     * List of all avaliable filters.
     *
     * @var array
     */
    protected $filters = [
        'keyword',
        'nome',
        'auto',
        'cliente_id', 
    ];

    protected function keyword($keyword)
    {
        $campo = $this->request->campo;
        $this->$campo($keyword);
    }

    protected function auto($auto)
    {
        return $this->builder->where('nome', 'like', '%' . $auto . '%');
    }

    protected function titulo($titulo)
    {
        return $this->builder->where('nome', 'like', '%' . $auto . '%');
    }

    protected function cliente_id($cliente_id)
    {
        return $this->builder->where('cliente_id', $cliente_id);
    }
}