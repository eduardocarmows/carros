<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome', 'rg', 'endereco', 'telefone', 'dt_nascimento'];
}
