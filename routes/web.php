<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
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
    return view('frontend.home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/home', [HomeController::class, 'Home'])->name('home');

    Route::get('/dashboard', [HomeController::class, 'UserDashboard'])->name('user_dashboard');
});

//Logout out
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');


//Add user route
Route::get('/register', [RegisterController::class, 'Register'])->name('register');

Route::post('/adduser', [RegisterController::class, 'AddUser'])->name('addUser');


//Login user route
Route::get('/login', [RegisterController::class, 'show'])->name('show');

Route::post('/user_login', [RegisterController::class, 'login'])->name('user_login');


//admin 2ru routes
Route::get('/profile', [AdminController::class, 'Profile'])->name('admin_profile');
