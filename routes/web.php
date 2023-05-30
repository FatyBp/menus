<?php

use App\Http\Controllers\InformacionController;
use App\Http\Controllers\Menus;
use App\Http\Controllers\Trabajos;
use App\Http\Controllers\Vistas;
use Illuminate\Support\Facades\Route;

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

Route::get("/",[Vistas::class,"index"]);
Route::get ("/menu",[Menus::class,"index"]);
Route::get("/trabajo",[Trabajos::class,"index"]);
Route::get("/informacion",[InformacionController::class,"index"]);