<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DashboardController;
use Laravel\Fortify\Http\Controllers\NewPasswordController;
use Laravel\Fortify\Http\Controllers\VerifyEmailController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use Laravel\Fortify\Http\Controllers\PasswordResetLinkController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\EmailVerificationPromptController;

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

$limiter = config('fortify.limiters.login');

// Authentication...
Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware(['guest'])
    ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware(array_filter([
        'guest',
        $limiter ? 'throttle:' . $limiter : null,
    ]));

// Reset Password
Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
    ->middleware(['guest'])
    ->name('password.request');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
    ->middleware(['guest'])
    ->name('password.reset');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
    ->middleware(['guest'])
    ->name('password.email');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
    ->middleware(['guest'])
    ->name('password.update');

// Registration
Route::get('/register', [RegisteredUserController::class, 'create'])
    ->middleware(['guest'])
    ->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware(['guest']);

// Email Verification...
Route::get('/email/verify', [EmailVerificationPromptController::class, '__invoke'])
    ->middleware(['auth'])
    ->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
    ->middleware(['auth', 'signed', 'throttle:6,1'])
    ->name('verification.verify');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

Route::middleware('auth', 'verified')->group(function () {
    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'admin'])->name('dashboard');
    });
    Route::name('user.')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'user'])->name('dashboard');
    });
});



Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('contact', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::get('how-it-works', [FrontendController::class, 'steps'])->name('frontend.steps');