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

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
Route::redirect('/','/en/');
Route::group(['prefix' => '{locale}'], function () {

	Route::middleware(['admin'])->group(function () {
		Route::get('/mail/inbox', 'EmailController@inbox')->name('inbox');
		Route::get('/mail/sent', 'EmailController@sent')->name('sent');
		Route::get('/mail/drafts', 'EmailController@drafts')->name('drafts');
		Route::get('/admin', function () {
			return view('layouts.admin');
		})->name('admin');
	});
	Route::resource('/developers', 'DeveloperController');
	Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
	Route::post('/login', 'Auth\LoginController@login')->name('login');
	Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
	Route::get('/', function () {
		return view('pages.home');
	})->name('home');

	Route::get('/regist', function () {

		User::create([
			'name'	=>	'Caleb Amolo',
			'email'	=>	'nerd@g.com',
			'password'	=>	Hash::make('banter'),
			'is_admin'	=> 1
		]);
	});

	Route::get('/about',function(){
		return view('pages.about');
	})->name('about');

	Route::get('/mail', function () {
		return view('pages.mail');
	});

	Route::match(['get', 'post'], '/mailit', 'EmailController@contactus')->name('sendEmail');
	//portfolio routes
	Route::get('/portfolio', function () {
		return view('pages.portfolio/portfolio');
	})->name('portfolio');
	Route::get('/portfolio/{id}', function ($id) {
		return view('pages.portfolio.single', ['id' => $id]);
	})->name('portfolio.single');
});
