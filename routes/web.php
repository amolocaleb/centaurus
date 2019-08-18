<?php

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
    return view('pages.home');
})->name('home');

Route::get('/home', function () {
    return view('pages.home');
});



//portfolio routes
Route::get('/Portfolio', function () {
    return view('pages.portfolio/portfolio');
});
Route::get('/Portfolio/s_portfolio', function () {
    return view('pages.portfolio.s_portfolio');
Route::get('/portfolio', function () {
    return view('pages.portfolio');
});
