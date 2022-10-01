<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoktersController;
use App\Http\Controllers\UnitsController;

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

Route::group([
    'prefix' => 'dokters',
], function () {
    Route::get('/', [DoktersController::class, 'index'])
         ->name('dokters.dokter.index');
    Route::get('/create', [DoktersController::class, 'create'])
         ->name('dokters.dokter.create');
    Route::get('/show/{dokter}',[DoktersController::class, 'show'])
         ->name('dokters.dokter.show')->where('id', '[0-9]+');
    Route::get('/{dokter}/edit',[DoktersController::class, 'edit'])
         ->name('dokters.dokter.edit')->where('id', '[0-9]+');
    Route::post('/', [DoktersController::class, 'store'])
         ->name('dokters.dokter.store');
    Route::put('dokter/{dokter}', [DoktersController::class, 'update'])
         ->name('dokters.dokter.update')->where('id', '[0-9]+');
    Route::delete('/dokter/{dokter}',[DoktersController::class, 'destroy'])
         ->name('dokters.dokter.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'units',
], function () {
    Route::get('/', [UnitsController::class, 'index'])
         ->name('units.unit.index');
    Route::get('/create', [UnitsController::class, 'create'])
         ->name('units.unit.create');
    Route::get('/show/{unit}',[UnitsController::class, 'show'])
         ->name('units.unit.show')->where('id', '[0-9]+');
    Route::get('/{unit}/edit',[UnitsController::class, 'edit'])
         ->name('units.unit.edit')->where('id', '[0-9]+');
    Route::post('/', [UnitsController::class, 'store'])
         ->name('units.unit.store');
    Route::put('unit/{unit}', [UnitsController::class, 'update'])
         ->name('units.unit.update')->where('id', '[0-9]+');
    Route::delete('/unit/{unit}',[UnitsController::class, 'destroy'])
         ->name('units.unit.destroy')->where('id', '[0-9]+');
});
