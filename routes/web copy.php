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

// Route::get('', function () {
//     return view('welcome');
// });

Route::get('', function () {
    $page = 'Main';
    $info = 'loremloremloremlorem';
    $year = 2022;
    return "<h1>{$page}</h1>
            <p>{$info}</p>
    ";
});

Route::get('about', function () {
    $page = 'About page';
    $year = 2022;
    // return view('about', ['page' => $page,'year' => $year]);
    return view('about', compact('page','year'));
})->name('ABOUT');

// Route::get('contacts',function() {
//     return view('contacts');
// });
// Route::any('contacts',function() {
//     dump($_POST);
//     return view('contacts');
// });
Route::match(['get','post','put'],'contact',function() {
    dump($_POST);
    return view('contacts');
})->name('contacts');
// Route::post('contacts',function() {
//     dump($_POST);
//     return view('contacts');
// });

// Route::post('contactsHandler', function() {
//     // dump($_POST);
//     dd($_POST);
//     echo 'Hello';   
// });

// Route::view('address','address',['page'=>'Address', 'data'=>'test']);

// Route::redirect('address','about');
// Route::get('address', function () {
//     return redirect()->route('ABOUT');
// });
// Route::redirect('address','about',301);
// Route::permanentRedirect('address','about');

// Route::get('post/{id?}/{slug?}',function($id = false, $slug = null) {
//     return "<h1>Post id $id. Action: $slug</h1>";
// });

// post
// post/5
// post/my-best-post
// post/5/edit
Route::prefix('admin')->group(function() {
    Route::get('posts',function() {
        return "<h1>Post page</h1>";
    });
    
    Route::get('post/create',function() {
        return "<h1>Post create</h1>";
    });
    
    Route::get('post/{id}/edit',function($id) {
        return "<h1>Post $id edit</h1>";
    });
});

// Route::fallback(function() {
//     return redirect()->route('ABOUT');
// });

Route::fallback(function() {
    //  return view('');
    abort('404', 'Error 404');
});