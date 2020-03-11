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

    public function path()
    {
        return $this->projeto->path() . '/ambiente/' . $this->id;
    }

    public function scopeOrdenado($query)
    {
        return $query->orderBy('nome');
    }
}
