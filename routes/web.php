<?php

use Illuminate\Support\Facades\Route;


Route::get('/',  function () {
    return view('home');
}) ->name('home');

Route::get('/paganti', 'PaganteController@index') -> name('paganti-index');

Route::get('/pagamenti', 'PagamentoController@index') -> name('pagamenti-index');
Route::get('/pagamenti/delete/{id}', 'PagamentoController@delete') -> name('pagamento-delete');
Route::get('pagamenti/update/{id}', 'PagamentoController@edit') -> name('pagamento-edit');
Route::post('pagamenti/update/{id}', 'PagamentoController@update') -> name('pagamento-update');
