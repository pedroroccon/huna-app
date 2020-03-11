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
}
