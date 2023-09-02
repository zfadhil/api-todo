<?php

use App\Http\Controllers\TodoController;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/todo', [TodoController::class, 'index']);
Route::post('/todo', [TodoController::class, 'store']);
Route::patch('/todo/{id}', [TodoController::class, 'update']);
Route::delete('/todo/{id}', [TodoController::class, 'delete']);
