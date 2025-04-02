<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/helloworld', function () {
    return 'Hello World';
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/users/{id}', function ($id) {
    return 'This is a user'.$id;
});

Route::get('/test', function () {
    $data = ['name' => 'tad', 'say' => '嗨！'];
    return view('welcome', $data);
});


Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

