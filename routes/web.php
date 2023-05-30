<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountdownController;

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
    return view('home');
});

Route::get('/login', function () {
    return view('user.login');
});

Route::get('/register', function () {
    return view('user.register');
});

Route::get('/career', function () {
    return view('career');
});

Route::get('/mini', function () {
    return view('mini');
});

Route::get('/maxytalks', function () {
    return view('talks');
});
Route::get('/aboutus', function () {
    return view('about');
});
Route::get('/detail', function () {
    return view('details.detailui');
});
Route::get('/frontend', function () {
    return view('details.detailfe');
});
Route::get('/backend', function () {
    return view('details.detailbe');
});
Route::get('/digitalmarketing', function () {
    return view('details.detaildm');
});
Route::get('/hybrid', function () {
    return view('details.detailhybrid');
});
Route::get('/laravel', function () {
    return view('details.detaillaravel');
});
Route::get('/figma', function () {
    return view('details.detailfigma');
});
Route::get('/content', function () {
    return view('details.detailcontent');
});
Route::get('/profile', function () {
    return view('user.editprofile');
});

Route::get('/lms', function () {
    return view('lms');
});

Route::get('/learn', [CountdownController::class,'index']);




