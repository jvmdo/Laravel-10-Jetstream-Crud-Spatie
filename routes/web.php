<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\GraduationController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\UssProviderController;

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

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/dashboard', function () {
        return view('dashboard');
    })
    ->name('dashboard');

Route::prefix('/')
    ->middleware(['auth:sanctum', 'verified'])
    ->group(function () {
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);

        Route::resource('users', UserController::class);
        Route::resource('countries', CountryController::class);
        Route::resource('cities', CityController::class);
        Route::resource('universities', UniversityController::class);
        Route::resource('graduations', GraduationController::class);
        Route::resource('certificates', CertificateController::class);
        Route::resource('books', BookController::class);

        Route::resource('uss-providers', UssProviderController::class);
    });

Route::prefix('/')
    ->middleware(['can:manipulate statuses'])
    ->group(function () {
        Route::resource('statuses', StatusController::class);
    });
