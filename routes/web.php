<?php

use App\Http\Controllers\detailmenuController;
use App\Http\Controllers\kontakController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\tentangkamiController;
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
    return view('index');
});

Route::get('/tentang-kami', [tentangkamiController::class, 'index']);

Route::get('/menu', [menuController::class, 'index']);
Route::get('/menu-detail/{id}', [menuController::class, 'show']);
Route::get('/menu-add', [menuController::class, 'menuAdd']);
Route::post('/menu-store', [menuController::class, 'store']);
Route::get('/menu-delete/{id}', [menuController::class, 'menuDelete']);

Route::get('/kontak', [kontakController::class, 'index']);
