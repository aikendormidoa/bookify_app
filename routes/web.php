<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/auth', function () {
    return view('auth');
})->name('auth.show');

Route::get('/events', function () {
    return view('events');
})->name('events');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/booking', function () {
    return view('booking');
})->name('booking');

Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('home');
})->name('logout');

Route::post('/login', [LoginController::class, 'login'])->name('login');