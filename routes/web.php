<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MasyarakatController;

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

Auth::routes();
Route::get('/bappeda', 'BappedaController@index')->name('bappeda')->middleware('bappeda');
Route::get('/kelurahan', 'KelurahanController@index')->name('kelurahan')->middleware('kelurahan');
Route::get('/masyarakat', 'MasyarakatController@index')->name('masyarakat')->middleware('masyarakat');

Route::get('/home', [HomeController::class, 'index']);

// route prefix masyarakat
Route::prefix('masyarakat')->group(function () {
    Route::get('/dashboard-m', [MasyarakatController::class, 'index']);
});
