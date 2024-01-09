<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[ProductController::class,'Home']);


Route::get('/produits/{cat}',[ProductController::class,'productbyCat']);

Route::get('/Ajouter',[AuthController::class,'ajouter']);

// web.php

Route::group(['middleware' => ['auth', 'admin'], 'as' => 'admin.'], function () {
    Route::get('/admin/dashboard', 'AdminController@dashboard')->name('dashboard');
});

Route::group(['middleware' => ['auth', 'user'], 'as' => 'user.'], function () {
    Route::get('/user/dashboard', 'UserController@dashboard')->name('dashboard');
});
// Route::post('/register', [RegistrationController::class, 'register'])->name('register');
// Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [AuthController::class, 'login']);
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



