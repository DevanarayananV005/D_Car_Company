<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\PostController;

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
// Route::post('/register',function(){
//     return 'Thank You';
// });
Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});
//adminlogin
Route::get('/adminlogin', function () {
    return view('adminlogin');
});
Route::get('/userindex', function () {
    return view('userindex');
});
Route::get('/update', function () {
    return view('update');
});
Route::get('/update', function () {
    return view('update');
});
Route::get('/adminindex', function () {
    return view('adminindex');
});
Route::get('/addcar', function () {
    return view('addcar');
});
Route::get('/edit', function () {
    return view('edit');
});
Route::POST('/addcar',[CarController::class,'addcar']);
Route::get('/adminindex', [CarController::class, 'adminindex'])->name('adminindex');
Route::get('/userindex', [CarController::class, 'userindex'])->name('userindex');
Route::get('/adminindex/{cars}/edit', [CarController::class, 'edit'])->name('edit');
Route::put('/adminindex/{cars}/update', [CarController::class, 'update'])->name('update');
Route::delete('/adminindex/{cars}/destroy', [CarController::class, 'destroy'])->name('destroy');
Route::POST('/register',[USerController::class,'register']);
Route::post('/logout',[UserController::class,'logout']);
Route::post('/adminlogout',[CarController::class,'adminlogout']);
Route::post('/login',[UserController::class,'login']);
Route::post('/create-post',[PostController::class,'create-post']);
//admin-login
Route::post('/adminlogin',[AdminController::class,'adminlogin'])->name('adminlogin');