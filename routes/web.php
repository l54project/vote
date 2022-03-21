<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Pollcontroller;
use App\Http\Controllers\Pilihancontroller;
use App\Http\Controllers\Vottingcontroller;
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
    return view('admin/user/index');
});

Route::get('panel/login', [Logincontroller::class, 'index']);
route::get('panel/poll', [Pollcontroller::class, 'poll'])->middleware('login');

Route::get('panel/user', [Usercontroller::class, 'index']);
Route::get('panel/poll', [Pollcontroller::class, 'index']);
Route::get('panel/pilihan', [Pilihancontroller::class, 'index']);
Route::get('panel/votting', [Vottingcontroller::class, 'index']);

