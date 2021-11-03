<?php

use Illuminate\Support\Facades\Route;

//Route::get('colaboradores', 'api\ColaboradorController@index');

//Route::post('colaboradores', 'api\ColaboradorController@store');

//Route::get('colaboradores/', 'api\ColaboradorController@show');

//Route::delete('colaboradores/', 'api\ColaboradorController@destroy');

Route::apiResource('colaboradores', 'api\ColaboradorController');
