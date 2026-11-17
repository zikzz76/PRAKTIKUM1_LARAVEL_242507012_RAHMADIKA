<?php

use App\Http\Controllers\PetugasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

route::get('/login',[PetugasController::class,'login']);
route::post('/login',[PetugasController::class,'proseslogin']);
route::get('/register',[PetugasController::class,'regis']);
route::get('/dashboard', function (){
    return view('dashboard');
});