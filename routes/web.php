<?php
use GuzzleHttp\Client;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorizeInstagramController;
use App\Http\Controllers\InicioController;


Route::get('/', [InicioController::class, 'index'])->name('home.index');
Route::get('/auth/instagram', [AuthorizeInstagramController::class, 'authorizeInstagram'])->name('auth.instagram');
Route::get('/auth/instagram/callback', [AuthorizeInstagramController::class, 'handleInstagramCallback'])->name('auth.callback');





