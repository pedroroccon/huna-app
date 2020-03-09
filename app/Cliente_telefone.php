<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente_telefone extends Model
{
  protected $fillable = ['fone'];

  public function cliente()
  {
      return $this->belongsTo(Cliente::class);
  }

  public function path()
  {
    return $this->cliente->path() . '/telefone/' . $this->id;
  }
}
