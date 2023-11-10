<?php
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::get('/listagem', [\App\Http\Controllers\UserController::class, 'index']);
//Route::get('/visualizar-usuario', [\App\Http\Controllers\UserController::class, 'show']);
Route::get('/users/{user}/edit', [UserController::class,'edit'])->name('users.edit');
Route::put('/users/{user}', [UserController::class,'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class,'destroy'])->name('users.destroy');
Route::get('/users/{user}', [UserController::class,'show'])->name('users.show');
Route::post('/users', [UserController::class,'store'])->name('users.store');
Route::get('/users/create', [UserController::class,'create'])->name('users.create');


