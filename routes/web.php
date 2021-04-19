<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController\AutoCompleteController;

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

Route::get('/', [AutoCompleteController::class, 'index']);
Route::post('/autocomplete/fetch', [AutoCompleteController::class, 'fetch'])->name('autocomplete.fetch');

Route::get('/index',function(){
    return view('index');
});

Route::get('/register/for',function(){
    return view('register_for');
})->name('register.for');

//Route::post('/apartment', [\App\Http\Controllers\DemoController::class, 'searchApartments'])->name('apartment');

Route::get('/user/registration/form',[\App\Http\Controllers\DemoController::class,'registrationForm'])->name('registration.form');

Route::post('/submit/registration/form',[\App\Http\Controllers\DemoController::class,'submitFormData'])
    ->name('submit.registration.form');

Route::get('/pdf', [\App\Http\Controllers\PdfController::class, 'pdfFile']);


Route::resource('users',\App\Http\Controllers\UsersController::class);
