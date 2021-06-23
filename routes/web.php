<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//route Home
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');


//Route nécessitant d'etre log
Route::group(['middleware' => 'auth'], function() {
    //route des CRUDs
    Route::resource('offers', App\Http\Controllers\OfferController::class);
    Route::resource('companies', App\Http\Controllers\CompanyController::class);
    Route::resource('users', App\Http\Controllers\usersController::class);

    Route::get('/profil', function() {
        return view('pages/profil');
    })->name('profil');

    Route::get('/wishlist', function() {
        return view('pages/wishlist');
    })->name('wishlist');

    Route::get('/admin', function() {
        return view('admin');
    })->name('admin');

});
//Route
Route::get('/about-us', function() {
    return view('pages/about');
})->name('about');


Route::get('register', function() {
    return view('auth/register');
})->name('register');


