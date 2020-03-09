<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ambiente_dormitorio extends Model
{
  public function ambiente()
  {
      return $this->belongsTo(Ambiente::class);
  }
}
