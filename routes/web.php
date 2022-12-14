<?php

use App\Http\Controllers\web\ContactController;
use App\Http\Controllers\web\PagesController;
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

Route::get('/', [PagesController::class, 'homePage']);
Route::get('/about-us', [PagesController::class, 'aboutPage']);
Route::get('/services', [PagesController::class, 'servicePage']);
Route::get('/contact-us', [PagesController::class, 'contactPage']);
Route::get('/faqs', [PagesController::class, 'faqsPage']);
Route::post('/submitContact', [ContactController::class, 'submitContactForm'])->name('submitContact');
