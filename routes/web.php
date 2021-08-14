<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Privee;
use App\Http\Controllers\PriveeController;
use App\Http\Controllers\CompanieController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/c/o', [CompanieController::class, 'index'])->name('companies');

Route::middleware(['auth:sanctum', 'verified'])->get('/p/o', [PriveeController::class, 'index'])->name('privee');

Route::middleware(['auth:sanctum', 'verified'])->get('/c/f', function () {
    return Inertia::render('Kaji/companieForm');
})->name('companieForm');

Route::middleware(['auth:sanctum', 'verified'])->get('/p/f', function () {
    return Inertia::render('Kaji/priveeForm');
})->name('priveeForm');

//test purpose
//Route::middleware(['auth:sanctum', 'verified'])->get('/test', [PriveeController::class, 'search'])->name('test');

//get the object to update
Route::middleware(['auth:sanctum', 'verified'])->get('/edit/{id}/p', [PriveeController::class, 'show'])->name('edit.privee');

Route::middleware(['auth:sanctum', 'verified'])->get('/edit/{id}/c', [CompanieController::class, 'show'])->name('edit.companies');

//update data
Route::middleware(['auth:sanctum', 'verified'])->patch('/edit/{id}/p',[PriveeController::class, 'update'])->name('patch.privee');

Route::middleware(['auth:sanctum', 'verified'])->patch('/edit/{id}/c',[CompanieController::class, 'update'])->name('patch.companie');
