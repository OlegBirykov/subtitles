<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilesController;

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
    return view('upload');
});
//Route::post('/', [FilesController::class, 'send'])->name('send');

Route::get('/convert', function () {
    return view('convert');
});

Route::get('/download', function () {
    return view('download');
});

Route::get('/clear', function () {
    return view('clear');
});
