<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'cliente', 'where'=>['id'=>'[0-9]+']], function (){
    Route::get('',              ['as'=>'cliente',            'uses'=>'ClienteController@index']);
    Route::get('create',        ['as'=>'cliente.create',     'uses'=>'ClienteController@create']);
    Route::get('{id}/destroy',  ['as'=>'cliente.destroy',    'uses'=>'ClienteController@destroy']);
    Route::get('{id}/edit',     ['as'=>'cliente.edit',       'uses'=>'ClienteController@edit']);
    Route::put('{id}/update',   ['as'=>'cliente.update',     'uses'=>'ClienteController@update']);
    Route::post('store',         ['as'=>'cliente.store',      'uses'=>'ClienteController@store']);
});

Route::group(['prefix'=>'tipo_veiculo', 'where'=>['id'=>'[0-9]+']], function (){
    Route::get('',              ['as'=>'tipo_veiculo',            'uses'=>'TipoVeiculoController@index']);
    Route::get('create',        ['as'=>'tipo_veiculo.create',     'uses'=>'TipoVeiculoController@create']);
    Route::get('{id}/destroy',  ['as'=>'tipo_veiculo.destroy',    'uses'=>'TipoVeiculoController@destroy']);
    Route::get('{id}/edit',     ['as'=>'tipo_veiculo.edit',       'uses'=>'TipoVeiculoController@edit']);
    Route::put('{id}/update',   ['as'=>'tipo_veiculo.update',     'uses'=>'TipoVeiculoController@update']);
    Route::post('store',         ['as'=>'tipo_veiculo.store',      'uses'=>'TipoVeiculoController@store']);
});

Route::group(['prefix'=>'veiculo', 'where'=>['id'=>'[0-9]+']], function (){
    Route::get('',              ['as'=>'veiculo',            'uses'=>'VeiculoController@index']);
    Route::get('create',        ['as'=>'veiculo.create',     'uses'=>'VeiculoController@create']);
    Route::get('{id}/destroy',  ['as'=>'veiculo.destroy',    'uses'=>'VeiculoController@destroy']);
    Route::get('{id}/edit',     ['as'=>'veiculo.edit',       'uses'=>'VeiculoController@edit']);
    Route::put('{id}/update',   ['as'=>'veiculo.update',     'uses'=>'VeiculoController@update']);
    Route::post('store',         ['as'=>'veiculo.store',      'uses'=>'VeiculoController@store']);
});