<?php

use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Livewire\Admin\Categories;
use App\Http\Livewire\Admin\Products;
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
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/shop', ShopController::class)->name('shop');
Route::get('/products/{product:slug}', ProductController::class)->name('products.show');
Route::get('/categories/{category:slug}', CategoryController::class)->name('categories.show');

Route::middleware('can:admin')->group(function () {
    Route::get('admin/products', Products::class)->name('admin.products');
    Route::get('admin/categories', Categories::class)->name('admin.categories');
});

require __DIR__.'/auth.php';
