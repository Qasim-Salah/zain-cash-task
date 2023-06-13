<?php

use App\Http\Controllers\File\FileController;
use Illuminate\Support\Facades\Route;

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

Route::redirect('/home', '/files/create');

Route::prefix('/files')->name('files.')->controller(FileController::class)->group(function () {

    Route::redirect('/', '/files/create');

    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');

});
