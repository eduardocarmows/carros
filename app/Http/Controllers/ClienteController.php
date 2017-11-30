<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Http\Requests\ClienteRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClienteController extends Controller
{
    public function index(){

        $clientes = Cliente::all();
        return view('clientes.index', ['clientes'=>$clientes]);
    }

    public function create(){

        return view('clientes.create');
    }

    public function store(ClienteRequest $request){

        $novo_cliente = $request->all();
        Cliente::create($novo_cliente);

        return redirect()->route('cliente');
    }

    public function destroy($id){
        Cliente::find($id)->delete();
        return redirect()->route('cliente');
    }

    public function edit($id){
        $cliente = Cliente::find($id);
        return view('clientes.edit', compact('cliente'));
    }

    public function update(ClienteRequest $request, $id){
        $cliente = Cliente::find($id)->update($request->all());
        return redirect()->route('cliente');
    }
}
