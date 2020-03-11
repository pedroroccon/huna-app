<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
	protected $fillable = [
		'nome',
		'cliente_id',
		'orcamento',
		'dt_contrato',
		'dt_inicio',
		'dt_prev_entrega',
		'dt_fim',
	];
	
	protected $dates = [
		'dt_contrato',
		'dt_inicio',
		'dt_prev_entrega',
		'dt_fim',
	];
	
	/**
	 * Um projeto pode possuir 
	 * vários ambientes atrelados 
	 * a ele.
	 *
	 * @return \Illuminate\Database\Eloquent\Collection
	 */
	public function ambientes()
	{
		return $this->hasMany(ProjetoAmbiente::class);
	}
	
	/**
	 * Um projeto pertence a 
	 * um determinado cliente.
	 *
	 * @return App\Cliente
	 */
	public function cliente()
	{
		return $this->belongsTo(Cliente::class);
	}
	
	public function path()
	{
		return config('hello.url') . '/projeto/' . $this->id;
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
