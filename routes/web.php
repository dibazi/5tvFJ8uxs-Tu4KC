<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/c/o', function () {
    return Inertia::render('Kaji/companies');
})->name('companies');

Route::middleware(['auth:sanctum', 'verified'])->get('/p/o', function () {
    return Inertia::render('Kaji/privee');
})->name('privee');

Route::middleware(['auth:sanctum', 'verified'])->get('/c/f', function () {
    return Inertia::render('Kaji/companieForm');
})->name('companieForm');

Route::middleware(['auth:sanctum', 'verified'])->get('/p/f', function () {
    return Inertia::render('Kaji/priveeForm');
})->name('priveeForm');

Route::middleware(['auth:sanctum', 'verified'])->get('/test', function () {
    return Inertia::render('Kaji/test');
})->name('test');