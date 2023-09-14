<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecruitmentController;

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

Route::get('/', [RecruitmentController::class, 'index']);
Route::get('/recruitments/create', [RecruitmentController::class, 'create']);
Route::get('/recruitments/{recruitment}', [RecruitmentController::class ,'show']);
Route::post('/recruitments', [RecruitmentController::class, 'store']);