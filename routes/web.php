<?php

use App\Http\Controllers\PageController;
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

Route::get('', 'HomeController@index')->name('home');
// Route::get('test', 'HomeController@test');
// Route::get('page/{slug}', 'PageController@show');
// Route::get('test2', 'Test\TestController@index');
// Route::resource('posts', 'PostController');
// Route::get('pages/clients','PageController@show')->name('page.clients');
Route::get('pages/clients','PageController@show')->name('clients');



