<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjetoAmbienteEtapaItem extends Model
{

    protected $table = 'projeto_ambiente_etapa_itens';

    protected $fillable = [
        'titulo', 
        'inicio_em', 
        'termino_em', 
    ];

    protected $dates = [
        'concluido_em', 
    ];

    public function etapa()
    {
        return $this->belongsTo(ProjetoAmbienteEtapa::class, 'projeto_ambiente_etapa_id');
    }

    public function path()
    {
        return $this->etapa->path() . '/item/' . $this->id;
    }

    public function concluido()
    {
        return ! empty($this->concluido_em);
    }

    public function concluir($data = null)
    {
        $this->concluido_em = $data ?? today();
        $this->update();
    }

    public function desconcluir()
    {
        $this->concluido_em = null;
        $this->update();
    }

    public function scopeOrdenado($query)
    {
        return $query->orderBy('id');
    }

    public function scopeConcluidos($query)
    {
        return $query->whereNotNull('concluido_em');
    }

    public function scopePendentes($query)
    {
        return $query->whereNull('concluido_em');
    }
}
