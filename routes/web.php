<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//    return view('welcome');
//});

// Route::get('home', [PostController::class, 'index']);
// Route::get('{id}',[PostController::class, 'show']);


Route::get('/',[TestController::class, 'index']);

Route::get('clients', [ClientController::class, 'index'])->name('clients.index');
Route::get('clients/{id}',[ClientController::class, 'show'])->name('clients.show');
Route::get('/commandes/{commande}', [CommandeController::class, 'show'])->name('commandes.show');