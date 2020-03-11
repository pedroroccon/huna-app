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

	public function scopeOrdenado($query)
	{
		return $query->orderBy('nome');
	}
	
}
