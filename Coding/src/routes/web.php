<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use App\Livewire\ShowHomePage;
use App\Http\Controllers\LandingPageController;
use App\Livewire\ShowDataPendaftaran;
use App\Livewire\ShowDataEkskul;

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/
Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/*
/ END
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', ShowHomePage::class)->name('home');
Route::get('/data', ShowDataPendaftaran::class)->name('data');
Route::get('/ekskul', ShowDataEkskul::class)->name('ekskul');
