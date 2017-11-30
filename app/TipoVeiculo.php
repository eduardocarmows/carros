<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoVeiculo extends Model
{
    protected $fillable = ['descricao'];


    public function veiculos(){
        return $this->hasMany('TipoVeiculo');
    }
}
