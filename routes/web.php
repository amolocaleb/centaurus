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

Route::get('/developers', function () {
    return view('pages.developer');
})->name('developers');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/admin', function () {
    return view('layouts.admin');
});

//portfolio routes
Route::get('/portfolio', function () {
    return view('pages.portfolio/portfolio');
});
Route::get('/portfolio/{id}', function ($id) {
    return view('pages.portfolio.single',['id'=>$id]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::resource('admabout', 'AboutController');
