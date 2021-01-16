<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/dashboard',[\App\Http\Controllers\TasksController::class, 'index'])->name('dashboard');
    Route::get('/show', [\App\Http\Controllers\HomeController::class, 'index']);

    Route::get('/create',[\App\Http\Controllers\PhoneController::class, 'add']);
    Route::post('/create',[\App\Http\Controllers\PhoneController::class, 'create']);

    Route::get('/edit/{edit}', [\App\Http\Controllers\PhoneController::class, 'edit']);
    Route::put('/edit/{edit}', [\App\Http\Controllers\PhoneController::class, 'update']);
    Route::post('/edit/{edit}', [\App\Http\Controllers\PhoneController::class, 'delete']);

    //Route::post('create',[\App\Http\Controllers\PhoneController::class, 'upload']);

    Route::get('/search', [\App\Http\Controllers\PhoneController::class, 'search']);


});
