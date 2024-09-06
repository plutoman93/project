<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ScheduleController;
use App\Livewire\AddTask;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('/dashboard');
});

Route::get('/add-work', function () {
    return view('add');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [HomeController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/dashboard', function () {
    return view('admin');
})->name('dashboard');

Route::get('/news', function () {
    return view('index');
})->name('news');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/addtask', function () {
    return view('addtask');
})->name('addtask');
Route::post('/addtask', [ScheduleController::class, 'store'])->name('addtask.store');


Route::get('/project', function () {
    return view('projects');
})->name('projects');

Route::get('/account-setting', function () {
    return view('account_setting');
})->name('account_setting');

Route::get('/personal', function () {
    return view('personal');
})->name('personal');

Route::get('/home-dashboard', function () {
    return view('home-dashboard');
})->name('home-dashboard');

Route::get('/addpersonal', function () {
    return view('addpersonal');
})->name('addpersonal');

Route::get('/system-setting', function () {
    return view('system-setting');
})->name('system-setting');

Route::get('/project-edit/{id}', function ($id) {
    //dd($id);
    return view('project.edit', compact('id'));
})->name('project-edit');

Route::get('/project-view/{id}', function ($id) {
    //dd($id);
    return view('project.view', compact('id'));
})->name('project-view');

Route::get('/project-edittask/{id}', function ($id) {
    //dd($id);
    return view('project.edittask', compact('id'));
})->name('project-edittask');

Route::get('/project-viewtask/{id}', function ($id) {
    //dd($id);
    return view('project.viewtask', compact('id'));
})->name('project-viewtask');

Route::get('/project-add', function () {
    return view('project.add');
})->name('project-add');


Route::get('/project-addtask', function () {
    return view('livewire.project.addtask');
})->name('project-addtask');
