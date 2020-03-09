<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente_email extends Model
{
  protected $fillable = ['email'];

  public function cliente()
  {
      return $this->belongsTo(Cliente::class);
  }


  public function path()
  {
    return $this->cliente->path() . '/email/' . $this->id;
  }
}
