<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ColaboradorController;

Route::get('colaboradores', 'api\ColaboradorController@index');
