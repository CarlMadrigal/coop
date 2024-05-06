<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CarabaoController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\CooperativeController;

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

Route::get('/', [RedirectController::class, 'redirectToHomepage']);

Route::post('/login', [LoginController::class, 'login']);

Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/notification', [RedirectController::class, 'redirectToNotificationpage']);

Route::get('/carabao', [RedirectController::class, 'redirectToCarabaospage']);

Route::get('/users', [RedirectController::class, 'redirectToUserspage']);

Route::get('/learning', [RedirectController::class, 'redirectToLearningMaterialpage']);

Route::get('/analytics', [RedirectController::class, 'redirectToLearningAnalyticspage']);

Route::get('/carabao/register', [RedirectController::class, 'redirectToRegisterCarabaopage']);

Route::post('/carabao/register/process', [CarabaoController::class, 'register']);