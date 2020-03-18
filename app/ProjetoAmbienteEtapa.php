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

    public function responsavel()
    {
        return $this->belongsTo(Responsavel::class);
    }

    public function ambiente()
    {
        return $this->belongsTo(ProjetoAmbiente::class, 'projeto_ambiente_id');
    }

    public function itens()
    {
        return $this->hasMany(ProjetoAmbienteEtapaItem::class);
    }

    public function path()
    {
        return $this->ambiente->path() . '/etapa/' . $this->id;
    }

    public function iniciar($inicio_em)
    {
        $this->inicio_em = $inicio_em ?? now();
        $this->update();
    }

    public function encerrar($termino_em)
    {
        $this->termino_em = $termino_em ?? now();
        $this->update();
    }

    public function concluida()
    {
        return (! empty($this->inicio_em) and ! empty($this->termino_em)) ? true : false;
    }

    public function scopeOrdenado($query)
    {
        return $query->orderBy('sequencia');
    }
}
