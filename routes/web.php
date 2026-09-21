<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminDashboardController;

use App\Http\Controllers\AdminSettingController;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/produk', [ProductController::class, 'index'])->name('products.index');
Route::get('/produk/{slug}', [ProductController::class, 'show'])->name('products.show');

Route::get('/berita', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/berita/{slug}', [ArticleController::class, 'show'])->name('articles.show');

// Admin Auth Routes
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    // Protected Admin Routes
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard');

        // Admin Site Settings CMS
        Route::get('/settings', [AdminSettingController::class, 'index'])->name('admin.settings.index');
        Route::post('/settings', [AdminSettingController::class, 'update'])->name('admin.settings.update');

        // Admin Products CRUD
        Route::get('/products', [AdminDashboardController::class, 'productsIndex'])->name('admin.products.index');
        Route::get('/products/create', [AdminDashboardController::class, 'productsCreate'])->name('admin.products.create');
        Route::post('/products', [AdminDashboardController::class, 'productsStore'])->name('admin.products.store');
        Route::get('/products/{id}/edit', [AdminDashboardController::class, 'productsEdit'])->name('admin.products.edit');
        Route::put('/products/{id}', [AdminDashboardController::class, 'productsUpdate'])->name('admin.products.update');
        Route::delete('/products/{id}', [AdminDashboardController::class, 'productsDestroy'])->name('admin.products.destroy');

        // Admin Articles (Berita) CRUD
        Route::get('/articles', [AdminDashboardController::class, 'articlesIndex'])->name('admin.articles.index');
        Route::get('/articles/create', [AdminDashboardController::class, 'articlesCreate'])->name('admin.articles.create');
        Route::post('/articles', [AdminDashboardController::class, 'articlesStore'])->name('admin.articles.store');
        Route::get('/articles/{id}/edit', [AdminDashboardController::class, 'articlesEdit'])->name('admin.articles.edit');
        Route::put('/articles/{id}', [AdminDashboardController::class, 'articlesUpdate'])->name('admin.articles.update');
        Route::delete('/articles/{id}', [AdminDashboardController::class, 'articlesDestroy'])->name('admin.articles.destroy');

        // Admin Stories (Cerita Warga) CRUD
        Route::get('/stories', [AdminDashboardController::class, 'storiesIndex'])->name('admin.stories.index');
        Route::get('/stories/create', [AdminDashboardController::class, 'storiesCreate'])->name('admin.stories.create');
        Route::post('/stories', [AdminDashboardController::class, 'storiesStore'])->name('admin.stories.store');
        Route::get('/stories/{id}/edit', [AdminDashboardController::class, 'storiesEdit'])->name('admin.stories.edit');
        Route::put('/stories/{id}', [AdminDashboardController::class, 'storiesUpdate'])->name('admin.stories.update');
        Route::delete('/stories/{id}', [AdminDashboardController::class, 'storiesDestroy'])->name('admin.stories.destroy');
    });
});
