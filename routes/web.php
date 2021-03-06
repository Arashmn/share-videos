<?php

use App\Models\User;
use App\Mail\TestEmail;
use App\Mail\verifyEmail;
use App\Jobs\ProcessVideo;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\videoController;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';




Route::get('', [videoController::class, 'index'])->name('video.index');
Route::get('/videos/create', [videoController::class, 'create'])->name('video.create');
Route::POST('/videos', [videoController::class, 'store'])->name('video.store');
Route::get('/videos/{video}', [videoController::class, 'show'])->name('video.show');
Route::get('/videos/{video}/edit', [videoController::class, 'edit'])->name('video.edit');
Route::put('/videos/{video}', [videoController::class, 'update'])->name('video.update');


Route::get('categories/{category}/videos', [categoryVideosController::class, 'index'])->name('categories.videos.index');


Route::get('email', function () {

    $user = User::first();

    // Mail::to('arashmakinian@gmail.com')->send(new TestEmail($user));
    return (new verifyEmail())->render();
});


Route::get('jobs', function () {

    ProcessVideo::dispatch();
});