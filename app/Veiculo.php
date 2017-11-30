<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $fillable = ['placa','nome','marca','modelo','cor','combustivel','ano_fabricado','ano_modelo','tipo_id'];

    public function tipoVeiculo(){
        return $this->belongsTo('App\TipoVeiculo','tipo_id');
    }
}
