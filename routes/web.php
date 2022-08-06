<?php

use Illuminate\Support\Facades\Route;

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
   dispatch(function() {
      logger('Sẻ thấy tôi ở file log trong 1 phút nữa');
   })->delay(now()->addMinutes(1));
   return 'finished';
});
