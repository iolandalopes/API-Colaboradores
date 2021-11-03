<?php

use Illuminate\Support\Facades\Route;

Route::get('colaboradores', 'api\ColaboradorController@index');

Route::post('colaboradores', 'api\ColaboradorController@store');

//$this->apiResource('colaboradores', 'api\ColaboradorController');
