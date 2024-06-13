<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\userController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TagihanController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\WaterBillController;
use App\Http\Controllers\PemakaianAirController;


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

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// });

// Route::get('/', function () {
//     return view('.template');
// });

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/table', [TableController::class, 'index'])->name('table.index');
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/status', [StatusController::class, 'index'])->name('status.index');
Route::get('/tagihan', [TagihanController::class, 'index'])->name('tagihan.index');
Route::get('/pemakaianair', [PemakaianAirController::class, 'index'])->name('pemakaianair.index');
// Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');

// Route::resource('tagihan', 'WaterBillController');
Route::get('/tagihanair', [WaterBillController::class, 'index'])->name('tagihanair.index');
Route::post('/tambah', [PemakaianAirController::class, 'store'])->name('pemakaianair.store');


