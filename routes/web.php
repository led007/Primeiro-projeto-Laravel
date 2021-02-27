<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZeusController;



Route::get('/', [ZeusController::class, 'home'])->name('home');
Route::get('/produtos', [ZeusController::class, 'produtos']);
Route::get('/servicos', [ZeusController::class, 'servicos']);
Route::get('/sobre', [ZeusController::class, 'sobre']);
