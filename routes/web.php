<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MessagesController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Pages Controller
Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/contact', [PagesController::class, 'contact']);

// Messages Controller
Route::post('/contact', [MessagesController::class, 'store']);
Route::get('/readMessage', [MessagesController::class, 'index']);
// Single item showing route
Route::get('/showMessage/{id}', [MessagesController::class, 'show']);
// Showing individual value to be updated
Route::get('/showMessage/edit/{id}', [MessagesController::class, 'edit']);
// Route to Update any individual message
Route::post('/showMessage/update/{id}', [MessagesController::class, 'update']);
// Route to Delete any individual message
Route::post('/showMessage/delete/{id}', [MessagesController::class, 'destroy']);