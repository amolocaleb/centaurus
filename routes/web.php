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
    $arr = [];
    for ($i=0;$i<10;$i++)   {
        $closure = new stdClass();
        $closure->id = $i;
        $closure->description = 'Description '.$i;
        $closure->title = 'Title '.$i;
        $arr[] = $closure;
    }
    
    return view('adm.about',['abouts'=> $arr]);
})->name('about');

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/admin', function () {
    return view('layouts.admin');
});
Route::get('/mail', function () {
    return view('pages.mail');
});

//portfolio routes
Route::get('/portfolio', function () {
    return view('pages.portfolio/portfolio');
});
Route::get('/portfolio/{id}', function ($id) {
    return view('pages.portfolio.single',['id'=>$id]);
});
<<<<<<< HEAD
Route::resource('developers', 'DeveloperController');
Route::get('developers', 'DeveloperController@index');
=======

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::resource('admabout', 'AboutController');
>>>>>>> b1ace110ebe9f89145359db12eae6baa728e9223
