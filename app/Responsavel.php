<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsavel extends Model
{
  protected $fillable = [
    'cargo',
    'nome',
    'celular',
    'email',
  ];
  public function etapas()
  {
      return $this->belongsTo(Etapas::class);
  }
    public function path()
    {
      return config('hello.url') . '/responsavel/' . $this->id;
    }
}
