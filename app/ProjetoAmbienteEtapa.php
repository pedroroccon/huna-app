<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjetoAmbienteEtapa extends Model
{
    protected $fillable = [
        'nome', 
        'descricao', 
        'sequencia', 
        'inicio_em', 
        'termino_em', 
    ];

    protected $dates = [
        'inicio_em', 
        'termino_em', 
    ];

    public function ambiente()
    {
        return $this->belongsTo(ProjetoAmbiente::class, 'projeto_ambiente_id');
    }

    public function path()
    {
        return $this->ambiente->path() . '/etapa/' . $this->id;
    }
}
