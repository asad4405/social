<?php

use App\Http\Controllers\Frontend\User\AuthController;
use App\Http\Controllers\Frontend\User\ProfileController as UserProfileController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// user register //
Route::get('/user/register',[AuthController::class,'register'])->name('user.register');
Route::post('/user/register/submit',[AuthController::class,'register_submit'])->name('user.register.submit');
Route::get('/user/login',[AuthController::class,'login'])->name('user.login');
Route::post('/user/login/submit',[AuthController::class,'login_submit'])->name('user.login.submit');

// user profile //
Route::get('/user/profile/{unique_id}',[UserProfileController::class,'profile'])->name('user.profile');







require __DIR__.'/auth.php';
