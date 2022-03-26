<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

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

Auth::routes();

Route::get('/home', [MessageController::class,'index'])->name('home');
Route::get('/create/{id?}/{subject?}', [MessagesController::class,'create'])->name('create');
Route::post('/send', [MessagesController::class,'send'])->name('send');
Route::get('/sent', [MessagesController::class,'sent'])->name('sent-messages');
Route::get('/read/{id}', [MessagesController::class,'read'])->name('read');
Route::get('/delete/{id}', [MessagesController::class,'delete'])->name('delete');
Route::get('/deleted', [MessagesController::class,'deleted'])->name('deleted-messages');
Route::get('/return/{id}', [MessagesController::class,'return'])->name('return');
