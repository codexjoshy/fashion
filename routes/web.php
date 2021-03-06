<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TailorController;
use App\Http\Controllers\UserController;
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
        Route::get('profile', [UserController::class, 'createProfile'])->name('profile');
        Route::get('category', [CategoryController::class, 'index'])->name('category.index');
        Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
        Route::get('category/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::post('category', [CategoryController::class, 'store'])->name('category.store');
        Route::put('category/{category}', [CategoryController::class, 'update'])->name('category.update');

        Route::get('user/create', [UserController::class, 'create'])->name('user.create');
        Route::get('user/{type}', [UserController::class, 'getUsers'])->name('user.index');
        Route::post('user', [UserController::class, 'store'])->name('user.store');

        Route::get('gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
        Route::get('gallery', [GalleryController::class, 'index'])->name('gallery.index');
        Route::get('gallery/{gallery}', [GalleryController::class, 'edit'])->name('gallery.edit');
        Route::post('gallery', [GalleryController::class, 'store'])->name('gallery.store');
        Route::put('gallery/{gallery}', [GalleryController::class, 'update'])->name('gallery.update');
    });
    Route::middleware('tailor')->prefix('tailor')->name('tailor.')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'user'])->name('dashboard');
        Route::get('profile', [DashboardController::class, 'user'])->name('profile');
        Route::put('tailor-profile', [TailorController::class, 'store'])->name('update.profile');
    });
    Route::middleware('customer')->prefix('customer')->name('user.')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'user'])->name('dashboard');
        Route::get('profile', [UserController::class, 'createProfile'])->name('profile');
        Route::put('profile', [UserController::class, 'updateProfile'])->name('profile.update');
        Route::post('bank', [TailorController::class, 'UpdateBank'])->name('banks.store');
        // Route::get('dashboard/tailor', [DashboardController::class, 'tailor'])->name('tailor.dashboard');
    });

    Route::get('dashboard', [DashboardController::class, 'app'])->name('dashboard');
});



Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('contact', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::get('how-it-works', [FrontendController::class, 'steps'])->name('frontend.steps');
Route::get('products', [FrontendController::class, 'products'])->name('frontend.product.index');
Route::get('products/{category}/{product}', [FrontendController::class, 'productShow'])->name('frontend.product.show');
Route::get('products/{category}', [FrontendController::class, 'productCategoryList'])->name('frontend.product.category');

Route::post('order', [OrderController::class, 'store'])->name('order.store');