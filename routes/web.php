<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BasicController;
use App\Http\Controllers\NoticeController;

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

// Route::get('/', function () {
//     return 'Hello AIUB !!';
// });

Route::get('/', [BasicController::class, 'index']);
Route::get('/cs', [BasicController::class, 'cs']);
Route::get('/eee', [BasicController::class, 'eee']);
Route::get('/research', [BasicController::class, 'research']);

//Route::get('/notice', [BasicController::class, 'notice']);

Route::resource('notice', NoticeController::class);

// Route::get('/publication/{id}', function ($id) {
//     return 'Publication no: '. $id;
// });

// Route::get('/cs', function () {
//     return view('pages.cs');
// });

// Route::get('/eee', function () {
//     return view('pages.eee');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
