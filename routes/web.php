<?php

use App\Http\Controllers\Todo2Controller;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;



Route::get('/index',[TodoController::class,'index'])->name( 'index' );
Route::post('/login',[TodoController::class,'login'])->name('login');

Route::get('/',[Todo2Controller::class,'todo'])->name('todo');

Route::get('/sig',[TodoController::class,'sig'])->name('sig');
Route::post('/connecter',[TodoController::class,'connecter'])->name('connecter');
Route::get('/deconnexion',[TodoController::class,'deconnexion'])->name('deconnexion');

Route::get('/add',[TodoController::class,'add'])->name('add');
Route::post('/store',[TodoController::class,'store'])->name('store');

Route::get('/edit/{id}',[Todo2Controller::class,'edit'])->name('edit');
Route::post('/update/{id}',[Todo2Controller::class,'update'])->name('update');

Route::get('/delete/{id}',[Todo2Controller::class,'delete'])->name('delete');
