<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etapas extends Model
{
	public function tipo()
	{
		return $this->hasmany(Etapas_tipo::class);
	}
	
	public function responsavel()
	{
		return $this->hasmany(Responsavel::class);
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
