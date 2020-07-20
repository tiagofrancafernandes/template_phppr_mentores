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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('mentoria')->name('mentoria.')->group(function () {
    Route::get('/', function () {
        return view('phppr_mentoria.pages.home');
    })->name('home');//TODO

    Route::get('/pesquisa', function () {
        return view('phppr_mentoria.pages.search');
    })->name('pesquisa');//TODO

    Route::get('/mentor/{user_name}', function () {
        return view('phppr_mentoria.pages.mentor_profile');
    })->name('mentor.profile');//TODO
});

