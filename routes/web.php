<?php

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

Route::prefix('student')->group(function() {
    Route::get('',"\App\Http\Controllers\StudentController@index")->name("students.index");
    Route::get('/create',"\App\Http\Controllers\StudentController@create")->name("students.create");
    Route::post('/create',"\App\Http\Controllers\StudentController@store")->name("students.store");
    Route::post('/delete/{id}',"\App\Http\Controllers\StudentController@destroy")->name("students.destroy");
    Route::get('/edit/{id}',"\App\Http\Controllers\StudentController@edit")->name("students.edit");
    Route::post('/update/{id}',"\App\Http\Controllers\StudentController@update")->name("students.update");
});

Route::prefix('auth')->group(function() {
    Route::get("/register","\App\Http\Controllers\Auth@register")->name("auth.register");
    Route::get("/login","\App\Http\Controllers\Auth@login")->name("auth.login");
    Route::post("/create-user","\App\Http\Controllers\Auth@create")->name("auth.create-user");
});

Route::get('/', function () {
    return view('welcome');
});
