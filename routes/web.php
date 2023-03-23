<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::controller(\App\Http\Controllers\Admin\DashboardController::class)->group(function () {
        Route::get('/admin', 'index')->name('admin');
    });
    Route::controller(\App\Http\Controllers\Admin\CategorieController::class)->group(function () {
        Route::get('/categorie', 'index')->name('categorie');
        Route::get('/categorie/create', 'create')->name('categorie.create');
        Route::post('/categorie/store', 'store')->name('categorie.store');
    });
    Route::controller(\App\Http\Controllers\Admin\ProduitController::class)->group(function () {
        Route::get('/product', 'index')->name('product');
    });
    Route::controller(\App\Http\Controllers\Admin\SubCategorieController::class)->group(function () {
        Route::get('/subcategorie', 'index')->name('subcategorie');
    });
    Route::controller(\App\Http\Controllers\Admin\CommandeController::class)->group(function () {
        Route::get('/commande', 'index')->name('commande');
    });
});


