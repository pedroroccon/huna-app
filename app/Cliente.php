<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
	protected $fillable = [
		'nome',
		'cpf',
	];
	
	public function projetos()
	{
		// return $this->hasMany('App\Projeto');
		return $this->hasMany(Projeto::class);
	}
	
	public function telefones()
	{
		return $this->hasMany(ClienteTelefone::class);
	}
	
	public function emails()
	{
		return $this->hasMany(ClienteEmail::class);
	}
	
	public function enderecos()
	{
		return $this->hasMany(ClienteEndereco::class);
	}
	
	public function path()
	{
		return config('hello.url') . '/cliente/' . $this->id;
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
