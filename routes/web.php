<?php

use App\Http\Controllers\avatar\AvatarController;
use App\Http\Controllers\upload\FileUploadController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home.index');

Route::group([
    'middleware' => ['web'],
    'prefix' => 'medewerkers'
], function() {
    Route::get('upload', [FileUploadController::class, 'index'])->name('file.upload.index');
    Route::post('upload', [FileUploadController::class, 'store'])->name('file.upload.store');
});

Route::group([
    'middleware' => ['web'],
    'prefix' => 'avatars'
], function() {
    Route::get('overzicht', [AvatarController::class, 'index'])->name('file.avatar.index');
    Route::get('aanmaken', [AvatarController::class, 'create'])->name('file.avatar.create');
    Route::post('aanmaken', [AvatarController::class, 'store'])->name('file.avatar.store');
});
