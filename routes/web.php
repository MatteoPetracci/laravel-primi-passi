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

Route::get('/', 'CdController@cdIndex')->name('cd.indexCd');

// Chiamo il metodo get, il primo parametro è la url, secondo parametro è il controller
// Dopo la chiocciola la funzione e la rinomino

Route::get('/cd', 'CdController@cdIndex')->name('cd.indexCd');

