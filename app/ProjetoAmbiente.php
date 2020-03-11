<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjetoAmbiente extends Model
{
    protected $fillable = [
        'nome', 
        'descricao', 
    ];

    /**
     * Um determinado ambiente 
     * pertence a um determinado 
     * projeto.
     *
     * @return \App\Projeto
     */
    public function projeto()
    {
        return $this->belongsTo(Projeto::class);
    }

    public function etapas()
    {
        return $this->hasMany(ProjetoAmbienteEtapa::class);
    }

    public function path()
    {
        return $this->projeto->path() . '/ambiente/' . $this->id;
    }

    /**
     * Scope responsável por aplicar
     * os filtros definidos para
     * este recurso.
     *
     * @param  \Illuminate\Database\Query\Builder  $query
     * @param  \Illuminate\Database\Query\Builder  $filters
     * @return \Illuminate\Database\Query\Builder
     */
    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }

    public function scopeOrdenado($query)
    {
        return $query->orderBy('nome');
    }
}
