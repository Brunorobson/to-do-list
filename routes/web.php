<?php

use App\Http\Controllers\TaskController;
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

// Route::get('/', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('/tarefa', [TaskController::class, 'form'])->name('task.form');
Route::get('/', [TaskController::class, 'index'])->name('task.index');
Route::post('/tarefa/nova', [TaskController::class, 'store'])->name('task.store');
