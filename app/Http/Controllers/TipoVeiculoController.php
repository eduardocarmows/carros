<?php

namespace App\Http\Controllers;

use App\Http\Requests\TipoVeiculoRequest;
use App\TipoVeiculo;
use Illuminate\Http\Request;

class TipoVeiculoController extends Controller
{
    public function index(){

        $tipoVeiculos = TipoVeiculo::all();
        return view('tipoVeiculos.index', ['tipoVeiculos'=>$tipoVeiculos]);
    }

    public function create(){

        return view('tipoVeiculos.create');
    }

    public function store(TipoVeiculoRequest $request){

        $novo_tipo_veiculo = $request->all();
        TipoVeiculo::create($novo_tipo_veiculo);

        return redirect()->route('tipo_veiculo');
    }

    public function destroy($id){
        TipoVeiculo::find($id)->delete();
        return redirect()->route('tipo_veiculo');
    }

    public function edit($id){
        $tipo_veiculo = TipoVeiculo::find($id);
        return view('tipoVeiculos.edit', compact('tipo_veiculo'));
    }

    public function update(TipoVeiculoRequest $request, $id){
        $tipo_veiculo = TipoVeiculo::find($id)->update($request->all());
        Session::flash('success', 'The category was successfully deleted.');
        return redirect()->route('tipo_veiculo');
    }
}
