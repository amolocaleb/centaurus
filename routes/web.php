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

/*
 * Mail Routes
 * 
 */
Route::get('/mail/inbox','EmailController@inbox')->name('inbox');
Route::middleware(['admin'])->group(function(){
	
	Route::get('/mail/sent','EmailController@sent')->name('sent');
	Route::get('/mail/drafts','EmailController@drafts')->name('drafts');
});


Route::get('/', function () {
	return view('pages.home');
})->name('home');

Route::get('/developers', function () {
	$dev = \App\Developer::all();
	return view('pages.developer',['developer'=>$dev]);
})->name('developers');



Route::get('/home', function () {
	return view('pages.home');
});

Route::get('/admin', function () {
	return view('layouts.admin');
});
Route::get('/mail', function () {
	return view('pages.mail');
});

Route::match(['get', 'post'], '/mailit', 'EmailController@contactus')->name('sendEmail');
//portfolio routes
Route::get('/portfolio', function () {
	return view('pages.portfolio/portfolio');
});
Route::get('/portfolio/{id}', function ($id) {
	return view('pages.portfolio.single', ['id' => $id]);
});
// Route::resource('developers', 'DeveloperController',['names'=>[
// 	'index' => 'developers',
	
// ]]);
// Route::get('developers', 'DeveloperController@index');
Route::get('/login',function(){
	return view('auth.login');
});

Route::post('/processlogin','Auth\LoginController@login')->name('login');