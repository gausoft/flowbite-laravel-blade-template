<?php

use App\Models\User;
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

Route::get('/', fn() => view('admin/pages/dashboard'))->name('dashboard');
Route::get('/users', fn() => view('admin/pages/users'))->name('users');
Route::get('/settings', fn() => view('admin/pages/settings'))->name('settings');
