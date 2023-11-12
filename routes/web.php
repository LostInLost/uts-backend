<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomePageController::class, 'index']);
Route::get('/features', [HomePageController::class, 'features']);
Route::get('/products', [HomePageController::class, 'products']);
Route::get('/contactus', [HomePageController::class, 'contactus']);

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'store']);

Route::middleware('guest')->group(function() {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'auth']);
});

Route::middleware('auth')->group(function() {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::prefix('/dashboard')->group(function() {
        Route::get('/', [DashboardController::class, 'index']);
        Route::prefix('/products')->group(function() {
            Route::get('/', [DashboardController::class, 'indexProducts'])->name('products.index');
            Route::get('/create', [DashboardController::class, 'indexCreateProducts']);
            Route::get('/{slug}/edit', [DashboardController::class, 'indexEditProduct']);
            Route::post('/create', [DashboardController::class, 'createProduct']);
            Route::post('/{id}/delete', [DashboardController::class, 'deleteProduct']);
            Route::post('/{id}/edit', [DashboardController::class, 'editProduct']);
            Route::get('/{slug}', [DashboardController::class, 'detailProduct']);
        });
    });
});
