<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etapas_tipo extends Model
{
  public function etapas()
  {
      return $this->belongsTo(Etapas::class);
  }
}
