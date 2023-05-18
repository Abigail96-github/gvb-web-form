<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\UserLoginController;
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
Route::group(['middleware' => 'login_auth'], function () {
    Route::get('/form', function () {
        return view('form');
    });
    Route::get('/table', function () {
        return view('table');
    });
    Route::get('/success', function () {
        return view('success');
    });
    Route::get('/pillars', function () {
        return view('pillars');
    });
    Route::get('/logout', function () {
        return view('logout');
    });
});
Route::get('/pillars', function () {
    return view('pillars');
});

Route::get('/', function () {
    return view('login');
});
Route::get('/forgot_pin', function () {
    return view('forgot_pin');
});
Route::get('/reset_pin', function () {
    return view('reset_pin');
});
Route::get('/register', function () {
    return view('register');
});



Route::get('/fetch-table', [UserController::class, 'fetchtable']);
Route::get('user_info', [UserController::class, 'userData']);
Route::post('/register',[UserController::class, 'register']);
Route::post('/login',[UserController::class, 'login']);
Route::post('/form',[UserController::class, 'saver']);
Route::post('/forgot_pin',[UserController::class, 'forgot_pin']);
Route::post('/reset_pin',[UserController::class, 'reset_pin']);




