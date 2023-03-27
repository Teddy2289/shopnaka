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
        Route::get('/categorie/edit/{id}', 'edit')->name('categorie.edit');
        Route::post('/categorie/update/{id}', 'update')->name('categorie.update');
        Route::delete('/categorie/delete/{id}', 'destroy')->name('categorie.delete');
    });
    Route::controller(\App\Http\Controllers\Admin\ProduitController::class)->group(function () {
        Route::get('/product', 'index')->name('product');
        Route::get('/product/create', 'create')->name('product.create');
        Route::post('/product/store', 'store')->name('product.store');
        Route::get('/product/edit/{id}', 'edit')->name('product.edit');
        Route::post('/product/update', 'update')->name('product.update');
        Route::delete('/product/delete', 'destroy')->name('product.delete');
    });
    Route::controller(\App\Http\Controllers\Admin\SubCategorieController::class)->group(function () {
        Route::get('/subcategorie', 'index')->name('subcategorie');
        Route::get('/subcategorie/create', 'create')->name('subcategorie.create');
        Route::post('/subcategorie/store', 'store')->name('subcategorie.store');
        Route::get('/subcategorie/edit/{id}', 'edit')->name('subcategorie.edit');
        Route::post('/subcategorie/update/{id}', 'update')->name('subcategorie.update');
        Route::delete('/subcategorie/delete/{id}', 'destroy')->name('subcategorie.delete');
    });
    Route::controller(\App\Http\Controllers\Admin\CommandeController::class)->group(function () {
        Route::get('/commande', 'index')->name('commande');
    });
});


