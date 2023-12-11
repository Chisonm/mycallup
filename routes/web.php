<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\PagesController;
use App\Http\Controllers\web\ContactController;
use App\Http\Controllers\PrivacyPolicyController;

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
// Route::get('/faqs', [PagesController::class, 'faqsPage']);
// Route::get('/products', [PagesController::class, 'productsPage']);
// Route::get('/media', [PagesController::class, 'mediaPage']);
Route::post('/submitContact', [ContactController::class, 'submitContactForm'])->name('submitContact');
Route::get('privacy-policy', [PrivacyPolicyController::class, 'privacyPolicyPage']);

Route::get('/app', function () {
    return redirect('https://app.mycallup.com/');
});
