<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UcapanController;

Route::get('/ucapan', [UcapanController::class, 'accView']);
Route::post('/ucapan', [UcapanController::class, 'acc']);

Route::get('/', [MainController::class, 'main'])->name('main');

Route::get('/katakata', [MainController::class, 'katakata'])->name('katakata');
