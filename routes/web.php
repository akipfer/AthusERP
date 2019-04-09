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


Route::get('/', ['as' => 'erp.home', 'uses' => 'Controller@index']);


Route::get('/contatos', ['as' => 'contatos.lista', 'uses' => 'ERP\ContatoController@index']);
Route::get('/contato/novo', ['as' => 'contatos.novo', 'uses' => 'ERP\ContatoController@novo']);
Route::get('/contato/novo/salvar', ['as' => 'contatos.salvar', 'uses' => 'ERP\ContatoController@salvar']);
Route::get('/contato/{id}/editar', ['as' => 'contatos.editar', 'uses' => 'ERP\ContatoController@editar']);
Route::get('/contato/{id}/atualizar', ['as' => 'contatos.atualizar', 'uses' => 'ERP\ContatoController@atualizar']);
