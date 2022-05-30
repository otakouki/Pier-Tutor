<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\emergency_loginControlloer;
use Illuminate\Http\Request;

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

Route::get('/emergency/add','App\Http\Controllers\emergency_loginControlloer@add')->name('emergency_login_add');
Route::post('/emergency/add', 'App\Http\Controllers\emergency_loginControlloer@create')->name('emergency_login_create');

Route::get('/emergency/sec','App\Http\Controllers\emergency_loginControlloer@index')->name('emergency_login_index');
Route::post('/emergency/sec', 'App\Http\Controllers\emergency_loginControlloer@sec')->name('emergency_login_select');

Route::get('/emergency/board','App\Http\Controllers\emergency_boardControlloer@index')->name('emergency_board_index');
//Route::post('/emergency/board', 'App\Http\Controllers\emergency_boardControlloer@sec')->name('emergency_board_select');

Route::get('/emergency/board_add','App\Http\Controllers\emergency_boardControlloer@add')->name('emergency_board_add');
Route::post('/emergency/board_add', 'App\Http\Controllers\emergency_boardControlloer@ins')->name('emergency_board_ins');
Route::get('/emergency/logout','App\Http\Controllers\emergency_loginControlloer@logout');