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
    return view('index');
});

// Route::post('/login',function(){
//     return view('login');
// });
Route::get('/login', function () {
    return view('login');
})->name('login');

// Route::post('/logout', function () {
//     // ทำการ Logout โดยไม่ต้องเช็คบัญชีผู้ใช้
//     Auth::logout();
//     return redirect('/login');
// })->name('logout');

// return redirect()->route('login');
