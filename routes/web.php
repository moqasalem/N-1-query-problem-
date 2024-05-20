<?php

use App\Http\Controllers\TestController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




Route::get('n_plus1',[TestController::class,'testNplus1']);
