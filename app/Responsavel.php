<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsavel extends Model
{
	
	protected $table = 'responsaveis';
	
	protected $fillable = [
		'cargo',
		'nome',
		'celular',
		'email',
	];
	
	public function etapas()
	{
		return $this->belongsTo(Etapas::class);
	}

	public function path()
	{
		return config('hello.url') . '/responsavel/' . $this->id;
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
}
