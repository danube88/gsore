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
Route::group([
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
	], function() {
        Route::get('/', function () {
            return view('welcome');
        });

		Route::get('/index', function () {
            return view('index');
        })->name('index');

		Route::get('/about', function () {
            return view('pages.about');
        })->name('about');

		Route::get('/contact', function () {
            return view('pages.contact');
        })->name('contact');

		Auth::routes();

		Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    });
