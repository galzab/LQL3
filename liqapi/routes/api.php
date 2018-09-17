<?php

<<<<<<< HEAD

use Illuminate\Http\Request;
=======
use Illuminate\Http\Request;

>>>>>>> 075bb7e455ed6db0f77bbb8052115e3c28de46dc
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
<<<<<<< HEAD

Route::resource('liquidaciones', 'LiquidacionController');
=======
>>>>>>> 075bb7e455ed6db0f77bbb8052115e3c28de46dc
