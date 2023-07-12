<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\JurnalmasukController@index');
    Route::get('jurnalmasuk', 'App\Http\Controllers\JurnalmasukController@index');
    
    Route::get('jurnalmasuk/tambah', 'App\Http\Controllers\JurnalmasukController@tambah');
    Route::post('jurnalmasuk/tambah_proses', 'App\Http\Controllers\JurnalmasukController@tambah_proses');
    Route::get('jurnalmasuk/edit/{id}', 'App\Http\Controllers\JurnalmasukController@edit');
    Route::post('jurnalmasuk/edit_proses', 'App\Http\Controllers\JurnalmasukController@edit_proses');
    Route::get('jurnalmasuk/delete/{id}', 'App\Http\Controllers\JurnalmasukController@delete');
    Route::get('home', 'App\Http\Controllers\JurnalmasukController@index');

   