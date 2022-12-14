<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\VulnerabilityController::class, 'index'])->name('home');

Route::group(['prefix' => 'vulnerability', 'as' => 'vulnerability.'], function ($route) {
    $route->get('/create', [App\Http\Controllers\VulnerabilityController::class, 'create'])
        ->name('create')
        ->middleware(['auth']);
    $route->get('/{vulnerability}/edit', [App\Http\Controllers\VulnerabilityController::class, 'edit'])
        ->name('edit')
        ->middleware(['auth']);
    $route->post('/{vulnerability}/update', [App\Http\Controllers\VulnerabilityController::class, 'update'])
        ->name('update')
        ->middleware(['auth']);
    $route->post('/store', [App\Http\Controllers\VulnerabilityController::class, 'store'])
        ->name('store')
        ->middleware(['auth']);
    $route->get('/{vulnerability}/destroy', [App\Http\Controllers\VulnerabilityController::class, 'destroy'])
        ->name('destroy')
        ->middleware(['auth']);
//public
    $route->get('/{vulnerability:slug}', [App\Http\Controllers\VulnerabilityController::class, 'show'])
        ->name('show');
});
