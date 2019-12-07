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
Route::middleware(['auth','admin'])->group(function(){
	Route::get('/mail/inbox','EmailController@inbox')->name('inbox');
	Route::get('/mail/sent','EmailController@sent')->name('sent');
	Route::get('/mail/drafts','EmailController@drafts')->name('drafts');
});


Route::get('/', function () {
	return view('pages.home');
})->name('home');



Route::get('/about', function () {
	$arr = [];
	for ($i = 0; $i < 10; $i++) {
		$closure = new stdClass();
		$closure->id = $i;
		$closure->description = 'Description ' . $i;
		$closure->title = 'Title ' . $i;
		$arr[] = $closure;
	}

	return view('adm.about', ['abouts' => $arr]);
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

Route::match(['get', 'post'], '/mailit', 'EmailController@contactus')->name('sendEmail');
//portfolio routes
Route::get('/portfolio', function () {
	return view('pages.portfolio/portfolio');
});
Route::get('/portfolio/{id}', function ($id) {
	return view('pages.portfolio.single', ['id' => $id]);
});
Route::resource('developers', 'DeveloperController', ['names'=>[
	'index'=>'pages.developer.index',
	'create'=>'pages.developer,create'
]]);
// Route::get('developers', 'DeveloperController@index');


//developer routes
Route::get('/developers', function () {
	return view('pages.developers.index');
})->name('developers');
Route::get('/developers/create', function () {
	return view('pages.developers.create');
})->name('developers');