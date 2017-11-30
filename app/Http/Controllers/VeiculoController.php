<?php

namespace App\Http\Controllers;

use App\Http\Requests\VeiculoRequest;
use App\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    public function index(){

        $veiculos = Veiculo::all();
        return view('veiculos.index', ['veiculos'=>$veiculos]);
    }

    public function create(){

        return view('veiculos.create');
    }

    public function store(VeiculoRequest $request){

        $novo_veiculo = $request->all();
        Veiculo::create($novo_veiculo);

        return redirect()->route('veiculo');
    }

    public function destroy($id){
        Veiculo::find($id)->delete();
        return redirect()->route('veiculo');
    }

    public function edit($id){
        $veiculo = Veiculo::find($id);
        return view('veiculos.edit', compact('veiculo'));
    }

    public function update(VeiculoRequest $request, $id){
        $veiculo = Veiculo::find($id)->update($request->all());
        return redirect()->route('veiculo');
    }
}
