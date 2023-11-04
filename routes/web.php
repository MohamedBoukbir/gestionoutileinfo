<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\UtilisateurController;

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
    return view('auth.login');
});
Route::get('/dashboard', [DashbordController::class,'logincontrole'])->middleware(['auth'])->name('dashboard');

Route::middleware('auth','role:admin')->group(function () {
    Route::get('/dashboard/Admin', [UtilisateurController::class, 'index'])->name('admin');
    Route::post('/dashboard/User/Add', [UtilisateurController::class, 'add'])->name('user.add');
Route::delete('/dashboard/User/Delete/{id}', [UtilisateurController::class, 'destroy'])->name('user.destroy');
Route::post('/dashboard/User/Update/{id}', [UtilisateurController::class, 'update'])->name('user.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
