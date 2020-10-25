<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StorageController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');

Route::get('test',function (){
    dd("void");
})->name('test');

Route::resource('/storages',StorageController::class);

// Route::redirect('/storages','/dashboard');