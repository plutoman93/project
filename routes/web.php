<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;

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
    return view('admin_home');
});

Route::get('/login', [UserController::class, 'showLoginForm']);
Route::post('/login', [UserController::class, 'login'])->name('login');
// Route::post('/login',function(){
//     return view('login');
// });

// Route::get('/admin_home', function () {
//     return view('admin_home');
// })->name('admin_home');

Route::get('/schedule', function(){
    return view('schedule');
})->name('schedule');

Route::get('/personnel', function(){
    return view('personnel');
})->name('personnel');

Route::get('/report', function(){
    return view('report');
})->name('report');

Route::get('/account-setting', function(){
    return view('account-setting');
})->name('account-setting');

Route::get('/setting', function(){
    return view('setting');
})->name('setting');
// Route::post('/logout', function () {
//     // ทำการ Logout โดยไม่ต้องเช็คบัญชีผู้ใช้
//     Auth::logout();
//     return redirect('/login');
// })->name('logout');

// return redirect()->route('login');
