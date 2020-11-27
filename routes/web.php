<?php

use App\Http\Controllers\LinksController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LinksController::class, 'index'])->name('home');
Route::get('/links/create', [LinksController::class, 'create'])->name('links.create');
Route::post('/links/store', [LinksController::class, 'store'])->name('links.store');
Route::delete('/links/{link}', [LinksController::class, 'destroy'])->name('links.delete');

