<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileuploadController;
use App\Http\Controllers\EmailController;
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
Route::resource('fileupload', FileuploadController::class);

Route::get('form', [FileuploadController::class, 'index' ]);

Route::get('/email', [EmailController::class, 'create' ]);
Route::post('/email', [EmailController::class, 'sendEmail' ])->name('send.email');
