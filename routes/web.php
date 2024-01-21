<?php

// use App\Models\Car;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MarqueController;
use App\Http\Controllers\CategorieController;
// use App\Http\Controllers\Auth\LoginController;
// use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LocationVoitureController;

Route::get('animation', function () {
    return view('animation');
});

Route::get('faq', function () {
    return view('faq');
});

Route::get('info', function () {
    return view('info');
});
Route::get('contact', function () {
    return view('contact');
});



Route::get('securite1', function () {
    return view('securite1');
});

Route::get('apropos', function () {
    return view('apropos');
});




Route::get('/', [HomeController::class, 'index']);

// ***************************ROUTES DE RESERVATION***********************
Auth::routes();
Route::get('locations/vehicules', [LocationVoitureController::class, 'vehiculesALouer'])->name('location.vehiculesALouer');
Route::resource('location', LocationVoitureController::class);

Route::middleware('admin')->group(function () {


    // *****************************ADMIN ROUTES****************************
    Route::get('/admin', function () {
        return redirect()->route('location.index');
    })->name('admin.dasboard');

    Route::resource('admin/marques', MarqueController::class);
    Route::resource('admin/categories', CategorieController::class);
    Route::resource('admin/cars', CarController::class);
});
