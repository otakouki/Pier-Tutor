<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Kad01_1Controller;
use App\Http\Controllers\Kad02_1Controller;
use App\Http\Controllers\Kad02_2Controller;
use App\Http\Controllers\Kad07_1Controller;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Kad01_1', [Kad01_1Controller::class, 'index']);
Route::get('/Kad02_1', [Kad02_1Controller::class, 'index']);
Route::get('/Kad02_2', [Kad02_2Controller::class, 'index']);
Route::resource('Kad07_1', Kad07_1Controller::class);
