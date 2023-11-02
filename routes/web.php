<?php

namespace App\Http\Controllers;
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

Route::get('/', function () {return view('v_login');});
Route::get('/dbconn', [dbconn::class,'index'])->name('index');
Route::post('/login', [user_controller::class, 'login'])->name('login');
Route::get('/v_select_menu', function () {return view('v_select_menu');})->name('v_select_menu');
Route::get('/qr_code', function () {return view('v_qr_code');})->name('qr_code');
Route::get('/addVis', [add_visitor_controller::class, 'qr_code'])->name('addVis');
Route::post('/add', [add_visitor_controller::class,'submit']);
Route::post('/save-image', [add_visitor_controller::class,'save_image']);
Route::post('/addvis', [add_visitor_controller::class, 'addVis'])->name('addVis');
Route::get('/v_dashboard', [c_dashboard::class, 'return_visitor']);
