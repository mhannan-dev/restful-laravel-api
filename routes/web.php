<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
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


Route::get('/index', [ContactController::class, 'index'])->name('contacts.index');
Route::get('/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/store', [ContactController::class, 'store'])->name('contacts.store');
Route::get('/edit/{id}',[ContactController::class, 'edit'])->name('contacts.edit');
Route::post('/update/{id}',[ContactController::class, 'update'])->name('contacts.update');
Route::post('/delete/{id}',[ContactController::class, 'delete'])->name('contacts.delete');
