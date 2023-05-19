<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'index'])->name('index');
Route::get('/merchandising', [PublicController::class, 'merchandising'])->name('merchandising');
Route::get('/about-us', [PublicController::class,'about_us'])->name('about_us');

Route::post('/login', [UserController::class, 'login'])->naame('login');
