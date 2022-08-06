<?php
use Illuminate\Support\Facades\Route;
use App\Jobs\ReconcileAccount;

Route::get('/', function () {
   $user = App\User::first();
   dispatch(new ReconcileAccount($user));
   return "OK";
});
