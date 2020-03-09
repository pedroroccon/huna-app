<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ambientes extends Model
{
  public function tipo()
  {
    return $this->hasmany(Ambientes_tipo::class);
  }
  public function projeto()
  {
    // return $this->belongsTo('App\Cliente');
    return $this->belongsTo(Projeto::class);
  }
  
}
