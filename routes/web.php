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
Route::resource('offers', App\Http\Controllers\OfferController::class);
Route::resource('companies', App\Http\Controllers\CompanyController::class);
Route::resource('users', App\Http\Controllers\usersController::class);
Route::get('/',[App\Http\Controllers\OfferController::class,'index'])->name('index');

Route::get('/about-us', function() {
    return view('pages/about');
})->name('about');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
    return view('admin');
})->name('admin');


Route::get('/profil', function() {
    return view('pages/profil');
})->name('profil');

Route::get('/wishlist', function() {
    return view('pages/wishlist');
})->name('wishlist');



Route::get('register', function() {
    return view('auth/register');
})->name('register');
