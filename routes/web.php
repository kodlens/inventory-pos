<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\StaffMiddleware;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('dashboard', function () {
//         return Inertia::render('dashboard');
//     })->name('dashboard');
// });

// Route::middleware(['guest'])->group(function () {
//     Route::get('dashboard', function () {
//         //return Inertia::render('dashboard');
//     })->name('dashboard');
// });


require __DIR__.'/settings.php';
require __DIR__.'/auth.php';




Route::middleware(['auth', AdminMiddleware::class])->group(function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard.index');


    Route::resource('/admin/products-items', App\Http\Controllers\Admin\ProductItemController::class)->names('admin.products-items');

});


Route::middleware(['auth', StaffMiddleware::class])->group(function () {
    Route::get('/staff/dashboard', [App\Http\Controllers\Staff\DashboardController::class, 'index'])->name('staff.dashboard.index');
});