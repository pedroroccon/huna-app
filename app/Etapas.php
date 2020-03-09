<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etapas extends Model
{
  public function tipo()
  {
    return $this->hasmany(Etapas_tipo::class);
  }
  public function responsavel()
  {
    return $this->hasmany(Responsavel::class);
  }
}
