<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/home', [HomeController::class, 'Home'])->name('home');

    Route::get('/dashboard', [HomeController::class, 'UserDashboard'])->name('user_dashboard');

    //Update user route
    Route::get('/edit_user/{id}', [RegisterController::class, 'Edit_user'])->name('edit_user');

    Route::post('/update_user/{id}', [RegisterController::class, 'Update_User'])->name('update_user');

    Route::get('/change_password/{id}', [RegisterController::class, 'change_password'])->name('change_password');

    Route::post('/update_pass/{id}', [RegisterController::class, 'update_pass'])->name('update_pass');

});

//Logout out
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');


//Add user route
Route::get('/register', [RegisterController::class, 'Register'])->name('register');

Route::post('/adduser', [RegisterController::class, 'AddUser'])->name('addUser');


//Login user route
Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::post('/user_login', [LoginController::class, 'login_user'])->name('login_user');


//frontend routes
Route::get('/about', [HomeController::class, 'About'])->name('about');

Route::get('/contact', [HomeController::class, 'Contact'])->name('contact');


//will need an admin middleware
//admin routes
Route::get('/profile', [AdminController::class, 'Profile'])->name('admin_profile');

Route::get('/admin_users', [AdminController::class, 'Admin_users'])->name('admin_users');
