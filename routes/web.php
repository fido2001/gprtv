<?php

use App\Http\Controllers\HomeController;
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

Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
    Route::get('/admin', 'HomeController@admin')->name('admin.index');
    Route::resource('category', 'CategoryController');
    Route::resource('tag', 'TagController');
    Route::resource('instansi', 'InstansiController');
    Route::resource('video', 'VideoController');
    Route::resource('file', 'FileController');
    Route::get('/thumbnail', 'HomeController@thumbnail')->name('admin.thumbnail');
    Route::get('/link_yt', 'HomeController@link_yt')->name('admin.link_yt');
});

Auth::routes();

Route::get('/', 'FrontendController@home');
Route::get('/videos', 'FrontendController@allVideo')->name('all.video');
Route::get('/videos/{video:slug}', 'FrontendController@showVideo')->name('show.video');
Route::get('/categories/{category:slug}', 'FrontendController@showCategory')->name('show.category');
Route::get('/tags/{tag:slug}', 'FrontendController@showTag')->name('show.tag');
Route::get('/instansis/{instansi:slug}', 'FrontendController@showInstansi')->name('show.instansi');
Route::get('search', 'FrontendController@search')->name('search.video');
Route::get('tentangkami', 'FrontendController@aboutus')->name('aboutus');
Route::get('live', 'FrontendController@live')->name('live');
Route::get('jadwal', 'FrontendController@jadwal')->name('jadwal');

Route::get('/home', 'HomeController@index')->name('home');
