<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

Route::get('/', function () {
    return view('welcome', [
        'name'=>'Touch Rosa'
    ]);
});


Route::get('/ulist', [UserController::class, 'userView']);
Route::get('/update', [UserController::class, 'update']);



Route::get('/form', fn()=>view('register'));

//controller
Route::get('/result', [FormController::class, 'getData']);

Route::get('/second-form', fn()=>view('secondForm'));
Route::get('/jquery-form', fn()=>view('loginFormJquery'));


Route::get('/jquery-result', [UserController::class, 'result']);
