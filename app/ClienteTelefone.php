<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClienteTelefone extends Model
{
	protected $fillable = ['fone'];
	
	public function cliente()
	{
		return $this->belongsTo(Cliente::class);
	}
	
	public function path()
	{
		return $this->cliente->path() . '/telefone/' . $this->id;
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
