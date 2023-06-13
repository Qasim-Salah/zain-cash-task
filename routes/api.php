<?php

use App\Http\Controllers\API\V1\Employee\EmployeeController;
use App\Http\Controllers\API\V1\File\FileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('v1')->group(function () {

    Route::redirect('/', '/employees');

    Route::prefix('/employees')->controller(EmployeeController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/{id}', 'show');
        Route::get('/getEmployees/GroupedByCity', 'getEmployeesGroupedByCity');
    });

    Route::prefix('/files')->controller(FileController::class)->group(function () {
        Route::get('/getFile/GroupedByEmployee', 'getFileGroupedByEmployee');
    });

});
