<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ambientes_tipo extends Model
{
  public function ambientes()
  {
      return $this->belongsTo(Ambientes::class);
  }
}
