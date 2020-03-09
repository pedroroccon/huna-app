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

  public function ambientes()
  {
    return $this->hasMany(Ambientes::class);
  }

    public function cliente()
    {
      // return $this->belongsTo('App\Cliente');
      return $this->belongsTo(Cliente::class);
    }


    public function path()
    {
      return 'projeto/' . $this->id;
    }
}
