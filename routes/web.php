<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Route::view('/history', 'history');

Route::prefix('administrator')->group(function () {
    Route::get('/home', function () {
        return view('home');
    })-> name ('home');

    Route::get('/history', function () {
        return view('history') ;
    })-> name ('user-control');

    Route::get('/inventory', function () {
        return view('inventory');
    })-> name ('inventory');

    Route::get('/login', function () {
        return view('login');
    })-> name ('login');

    Route::get('/customer', function () {
        return view('customer');
    })-> name ('customer');
});

Route::prefix('manager')->group(function () {
    Route::get('/home', function () {
        return view('home');
    })-> name ('home');
    
    Route::get('/user-control', function () {
        return view('userControl');
    })-> name ('user-control');

    Route::get('/inventory', function () {
        return view('inventory');
    })-> name ('inventory');

    Route::get('/login', function () {
        return view('login');
    })-> name ('login');

    Route::get('/customer', function () {
        return view('customer');
    })-> name ('customer');
});