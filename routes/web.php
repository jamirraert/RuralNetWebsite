<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\RuralNetWebsiteController;

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


Route::get('/', [RuralNetWebsiteController::class, 'home']);
Route::get('/insurance_solutions', [RuralNetWebsiteController::class, 'insuranceSolution']);
Route::get('/contact', [RuralNetWebsiteController::class, 'contact']);
Route::get('/privacy_policy', [RuralNetWebsiteController::class, 'privacyPolicy']);