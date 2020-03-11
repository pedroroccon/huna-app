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
}
