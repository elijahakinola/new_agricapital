<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;

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

Route::get('/',  [HomePageController::class, 'index']);
Route::get('/about_us',  [HomePageController::class, 'about_us']);
Route::get('/services',  [HomePageController::class, 'services']);
Route::get('/farmers_corner',  [HomePageController::class, 'farmers_corner']);
Route::get('/media',  [HomePageController::class, 'media']);
Route::get('/contact',  [HomePageController::class, 'contact_us']);
Route::get('/faq',  [HomePageController::class, 'faq']);
Route::get('/steps_to_register',  [HomePageController::class, 'steps_to_register']);
Route::get('/application_form',  [HomePageController::class, 'application_form']);
// Route::get('/news',  [HomePageController::class, 'news']);
Route::get('/gallery',  [HomePageController::class, 'gallery']);