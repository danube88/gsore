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

		Route::group(['prefix' => 'blog'], function()
		{
			Route::group(['prefix' => 'grid-sidebar'], function()
			{
				Route::get('/left', function () {
		            return view('pages.blog.grid-sidebar-left');
		        })->name('blogGridSidebarLeft');

				Route::get('/right', function () {
		            return view('pages.blog.grid-sidebar-right');
		        })->name('blogGridSidebarRight');
			});

			Route::group(['prefix' => 'list-sidebar'], function()
			{
				Route::get('/left', function () {
		            return view('pages.blog.list-sidebar-left');
		        })->name('blogListSidebarLeft');

				Route::get('/right', function () {
		            return view('pages.blog.list-sidebar-right');
		        })->name('blogListSidebarRight');
			});

			Route::group(['prefix' => 'single-sidebar'], function()
			{
				Route::get('/left', function () {
		            return view('pages.blog.single-sidebar-left');
		        })->name('blogSingleSidebarLeft');

				Route::get('/right', function () {
		            return view('pages.blog.single-sidebar-right');
		        })->name('blogSingleSidebarRight');
			});

		});

		Route::group(['prefix' => 'shop'], function()
		{
			Route::group(['prefix' => 'layout'], function()
			{
				Route::get('/grid-sidebar-left', function () {
		            return view('pages.shop.layout.shop-sidebar-grid-left');
		        })->name('shopGridSidebarLeft');

				Route::get('/grid-sidebar-right', function () {
		            return view('pages.shop.layout.shop-sidebar-grid-right');
		        })->name('shopGridSidebarRight');

				Route::get('/list-sidebar-left', function () {
		            return view('pages.shop.layout.shop-sidebar-left-list-view');
		        })->name('shopListSidebarLeft');

				Route::get('/list-sidebar-right', function () {
		            return view('pages.shop.layout.shop-sidebar-right-list-view');
		        })->name('shopListSidebarRight');

				Route::get('/full-sidebar', function () {
		            return view('pages.shop.layout.shop-sidebar-full-width');
		        })->name('shopFullSidebar');
			});

			Route::group(['prefix' => 'page'], function()
			{
				Route::get('/cart', function () {
					return view('pages.shop.pages.cart');
				})->name('cart');

				Route::get('/checkout', function () {
					return view('pages.shop.pages.checkout');
				})->name('checkout');

				Route::get('/compare', function () {
					return view('pages.shop.pages.compare');
				})->name('compare');

				Route::get('/empty-cart', function () {
					return view('pages.shop.pages.empty-cart');
				})->name('empty-cart');

				Route::get('/wishlist', function () {
					return view('pages.shop.pages.wishlist');
				})->name('wishlist');

				Route::get('/my-account', function () {
					return view('pages.shop.pages.my-account');
				})->name('my-account');
			});
		});

		Auth::routes();

		Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    });
