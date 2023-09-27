<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecruitmentController;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    
    Route::get('/home', [RecruitmentController::class, 'index']);
    Route::get('/recruitments/create', [RecruitmentController::class, 'create']);
    Route::get('/recruitments/{recruitment}/edit', [RecruitmentController::class, 'edit']); 
    Route::get('/recruitments/{recruitment}', [RecruitmentController::class ,'show']);
    Route::post('/recruitments', [RecruitmentController::class, 'store']);
    Route::put('/recruitments/{recruitment}', [RecruitmentController::class, 'update']);
    Route::delete('/recruitments/{recruitment}', [RecruitmentController::class,'delete']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/', function () {
    return view('welcome');
});
require __DIR__.'/auth.php';
