<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsFormController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});


//Route::get('/contacts', [ContactUsFormController::class, 'createForm']);
Route::post('/contacts', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');



Route::get('/admin', [ContactUsFormController::class, 'index'])->name('admin.contact');

Route::get('/delete/{id}', [ContactUsFormController::class, 'destroy'])->name('delete');
//Route::post('/contacts', [ContactUsFormController::class, 'Teste'])->name('contact.store');
