<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClienteEndereco extends Model
{
  protected $fillable = [
    'rua',
    'numero',
    'complemento',
    'bairro',
    'cidade',
    'cep',
  ];
  public function cliente()
  {
      return $this->belongsTo(Cliente::class);
  }
  public function path()
  {
    return $this->cliente->path() . '/endereco/' . $this->id;
  }
}
