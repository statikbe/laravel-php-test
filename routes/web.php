<?php

use App\Http\Controllers\avatar\AvatarController;
use App\Http\Controllers\BugController;
use App\Http\Controllers\employee\EmployeeController;
use App\Http\Controllers\meetings\MeetingRoomController;
use App\Http\Controllers\meetings\ScheduledMeetingController;
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

Route::get('/employees', [EmployeeController::class, 'index'])->name('employee.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('bug', [BugController::class, 'index'])->name('bug.index');

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

Route::group([
   'middleware' => ['web'],
   'prefix' => 'meetings',
], function() {
    Route::get('overzicht', [MeetingRoomController::class, 'index'])->name('meeting.room.index');
    Route::get('{meetingRoom}/overzicht', [ScheduledMeetingController::class, 'index'])->name('scheduled.meeting.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
