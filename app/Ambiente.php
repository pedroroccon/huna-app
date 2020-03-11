<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ambiente extends Model
{
	
	protected $fillable = [
		'nome', 
		'descricao', 
	];
	
	public function projeto()
	{
		return $this->hasMany(Projeto::class);
	}

	public function path()
	{
		return config('hello.url') . '/ambiente/' . $this->id;
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
