<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\FoodmenuController;
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
    return view('login');
});

// Route::get('/testdash', function () {
//     return view('testdash');
// });
Route::get('/foodmenu', function () {
    return view('foodmenupage');
});

Route::get('/foodmenu', [FoodmenuController::class, 'index']);

Route::group(['middleware' => 'guest'], function(){
    Route::get('/register',[AuthController::class, 'register']) -> name('register');
    Route::post('/register',[AuthController::class, 'registerPost']) -> name('register');
    Route::get('/login',[AuthController::class, 'login'])->name('login');
    Route::post('/login',[AuthController::class, 'loginPost'])->name('login');
    
    

});

Route::group(['middleware' => 'auth'], function(){

    // Route::get('/register',[AuthController::class, 'register']) -> name('register');
    // Route::post('/register',[AuthController::class, 'registerPost']) -> name('register');

    Route::get('/db', function(){return view('db');});
    // Route::get('/home',[HomeController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
    // Route::resource('student', StudentController::class);
    // Route::resource('/home', StudentController::class);

    Route::resource('food', FoodController::class);
    Route::resource('/home', FoodController::class);
    Route::get('/dashboard',[FoodController::class, 'index'])->name('dashboard');


    Route::get('/users', [UsersController::class,'index'])->name('users.index');

    Route::delete('/user/{id}', [UsersController::class,'destroy'])->name('users.delete');

    Route::get('/users',[AuthController::class,'index'])->name('users.index');
    Route::delete('/users/{id}', [AuthController::class,'destroy'])->name('users.delete');

    Route::get('/users', [AuthController::class,'index'])->name('users.index');
    Route::get('/users/create', [AuthController::class,'create'])->name('users.create');
    Route::post('/users', [AuthController::class,'store'])->name('users.store');

});