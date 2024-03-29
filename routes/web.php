<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CartController;
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


//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

//Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});
Route::get('/', [ProfileController::class, 'joom'])->name('profile.joom');
Route::get('/product_joom', [ProfileController::class, 'product_joom'])->name('profile.product_joom');
Route::get('/category', [ProfileController::class, 'category'])->name('profile.category');
Route::get('/category_sub', [ProfileController::class, 'category_sub'])->name('profile.category_sub');
Route::post('/add_comment', [CommentController::class, 'add_comment'])->name('profile.add_comment');
Route::get('/cart', [ProfileController::class, 'cart'])->name('profile.cart');
Route::post('/add_to_cart', [CartController::class, 'add_to_cart'])->name('cart.add_to_cart');





require __DIR__.'/auth.php';
