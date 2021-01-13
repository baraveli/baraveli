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

Route::get('/', function () {
    return view('welcome');
});

Route::redirect('.env', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ');
Route::redirect('wp-login', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ');
Route::redirect('wp-admin', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ');
Route::redirect('.git', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ');
Route::redirect('composer.lock', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ');
Route::redirect('config.py', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ');
Route::redirect('.htaccess', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ');

