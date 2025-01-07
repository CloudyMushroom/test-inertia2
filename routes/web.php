<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::inertia('/', 'Home');
Route::inertia('/account', 'Account');
Route::inertia('/addaccount', 'AddAccount');

/*
    JSTAR:
    if complex controller is needed, use
    return Inertia::render('Name of page')
*/