<?php

use App\Http\Controllers\MapController;
use App\Http\Controllers\SucController;
use App\Models\Suc;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); })->name('welcome');

Route::get('/dashboard', function () {
    $sucs = Suc::all();  
    return view('sucs.index', compact('sucs'));  
})->name('dashboard');

Auth::routes();
Route::resource('sucs', SucController::class)->middleware('auth');
Route::get('/maps', [MapController::class, 'showMap'])->middleware('auth');

Route::get('/sucs/{id}/map', [MapController::class, 'showMap'])->name('sucs.map');
