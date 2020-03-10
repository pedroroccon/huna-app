<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClienteEmail extends Model
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
