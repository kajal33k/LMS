<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


Route::get('/', function () {
    return view('frontend.index');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';

//---------------------------BACKEND ROUTES ---------------------------------


Route::prefix('backend/banner')->name('backend.banner.')->controller(BannerController::class)->group(function () {
    Route::get('/index', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/{banner}/edit', 'edit')->name('edit'); // load the edit form
    Route::put('/{banner}/update', 'update')->name('update'); // update via PUT
    Route::delete('/{banner}/destroy', 'destroy')->name('destroy'); // delete via DELETE
});

// ABOUT CONTROLLER
Route::get('/backend/about/index', [AboutController::class, 'index'])->name('backend.about.index');
Route::get('/backend/about/create', [AboutController::class, 'create'])->name('backend.about.create');
Route::post('/backend/about/store', [AboutController::class, 'store'])->name('backend.about.store');
Route::get('/backend/about/{about}/edit', [AboutController::class, 'edit'])->name('backend.about.edit');
Route::put('/backend/about/{about}/update', [AboutController::class, 'update'])->name('backend.about.update');
Route::delete('/backend/about/{about}/destroy', [AboutController::class, 'destroy'])->name('backend.about.destroy');


// SERVICE CONTROLLER
Route::get('/backend/service/index', [ServiceController::class, 'index'])->name('backend.service.index');
Route::get('/backend/service/create', [ServiceController::class, 'create'])->name('backend.service.create');
Route::post('/backend/service/store', [ServiceController::class, 'store'])->name('backend.service.store');
Route::get('/backend/service/{service}/edit', [ServiceController::class, 'edit'])->name('backend.service.edit');
Route::get('/backend/service/{service}/update', [ServiceController::class, 'update'])->name('backend.service.update');
Route::delete('/backend/service/{service}/destroy', [ServiceController::class, 'destroy'])->name('backend.service.destroy');