<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/pages.about', function () {
    return view('pages.about');
});
Route::get('/pages.kontor', function () {
    return view('pages.kontor');
});

Route::get('/pages.frukt', function () {
    return view('pages.frukt');
});
Route::get('/pages.bygg', function () {
    return view('pages.bygg');
});
Route::get('/pages.lager', function () {
    return view('pages.lager');
});
Route::get('/pages.hemstad', function () {
    return view('pages.hemstad');
});
Route::get('/pages.butik', function () {
    return view('pages.butik');
});
Route::get('/pages.news', function () {
    return view('pages.news');
});

Route::get('/pages.job', function () {
    return view('pages.job');
});

Route::get('/pages.windows', function () {
    return view('pages.windows');
});

Route::get('/pages.golv', function () {
    return view('pages.golv');
});

Route::get('/pages.contact', function () {
    return view('pages.contact');
});


Route::get('/pages.flytt', function () {
    return view('pages.flytt');
});


Route::get('/pages.matta', function () {
    return view('pages.matta');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
