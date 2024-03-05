<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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

Route::get('/', [FormController::class,'displayForm']);
Route::get('/update/info/{id}', [FormController::class,'displayUpdateForm']);

Route::post('/submit',[FormController::class,'submitForm'])->name('submit');
Route::get('/delete/input/{id}',[FormController::class,'deleteForm']);
Route::post('/update',[FormController::class,'updateForm'])->name('update');