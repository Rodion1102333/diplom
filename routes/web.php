<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
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


// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['Middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'create'])->name('register.create');
    Route::post('/register', [AuthController::class, 'store'])->name('register.store');
    Route::get('/login', [AuthController::class, 'loginForm'])->name('login.create');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::delete('/', [PostController::class, 'post.delete'])->name('post.delete');
});

Route::group(['Middleware' => 'auth'], function () {

    Route::post('/post/delete/{id}', [PostController::class, 'post.delete']);
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
    Route::post('/profile', [AuthController::class, 'profile'])->name('profile');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/create', [PostController::class, 'create'])->name('create');
    Route::post('/create', [PostController::class, 'store'])->name('store');
    Route::get('/cart/game/', [CartController::class, 'show'])->name('cart.game');
});
Route::group(['Middleware' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('/post/{id}/cancel', [AdminController::class, 'cancelPost'])->name('admin.post.cancel');
    Route::post('/post/{id}/cancel', [AdminController::class, 'cancelPost'])->name('admin.post.cancel');
    Route::post('/post/accept', [AdminController::class, 'acceptPost'])->name('admin.post.accept');
    Route::get('/post/accept', [AdminController::class, 'acceptPost'])->name('admin.post.accept');
    Route::get('/post/{product}/hit', [AdminController::class, 'changeHit'])->name('admin.post.changeHit');
    Route::get('/post/{product}/sale', [AdminController::class, 'changeSale'])->name('admin.post.changeSale');
    Route::put('/post/edit/{product}', [AdminController::class, 'update'])->name('update');
    Route::get('/delete/{id}', [AdminController::class, 'deleteProduct'])->name('admin.delete.product');
    Route::get('/post/edit/{product}', [AdminController::class, 'editProduct'])->name('admin.product-edit');
    Route::get('/category', [CategoryController::class, 'category'])->name('category');
    Route::post('/category', [CategoryController::class, 'storee'])->name('storee');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users-table');
    Route::get('/post/edit', [AdminController::class, 'edit'])->name('edit');
    Route::get('/order/delete/{order}', [AdminController::class, 'deleteOrder'])->name('admin.delete-order');
    Route::get('/user/{user}/change-role', [AdminController::class, 'changeRole'])->name('admin.user.change-role');
    Route::get('/orders', [AdminController::class, 'orders'])->name('admin.orders-table');
    Route::get('/order/{order}', [AdminController::class, 'showOrder'])->name('admin.show-order');
    Route::get('/order/delete/{order}', [AdminController::class, 'deleteOrder'])->name('admin.delete-order');

});
//Route::group(['middleware' => ['auth', 'isadmin'], 'namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'], function()
//{
//    Route::get('/home', 'HomeController@index')->name('home');
//
//    Route::resource('/categories', 'CategoryController');
//
//    Route::get('/products/restore/{id}', )->name('');
//    Route::get('/products/trashed','' )->name('');
//    Route::resource('/products', '');
//});

    // Route::get('/politika', [AuthController::class, 'info'])->name('politika');


    Route::get('/', [ProductController::class, 'index'])->name('home');

    Route::get('/products/search', [ProductController::class, 'search'])->name('products.serach');
    Route::get('/product/{slug}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('categories.show');
    Route::match(['get', 'post'], '/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
    Route::get('author/{user}', [PostController::class, 'author'])
        ->name('author');


    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
    Route::get('/cart/del-item/{product_id}', [CartController::class, 'delItem'])->name('cart.del.item');
    Route::get('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');
    Route::get('/cart/show', [CartController::class, 'show'])->name('cart.show');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/contact', [AuthController::class, 'contact'])->name('contact');
    Route::get('/inform', [AuthController::class, 'inform'])->name('inform');
    Route::get('/questions', [AuthController::class, 'questions'])->name('questions');

    Route::get('/o-kompanii', [ProductController::class, 'information'])->name('information');
    Route::get('/delivery', [ProductController::class, 'delivery'])->name('delivery');
    Route::get('/trade', [ProductController::class, 'trade'])->name('trade');
    Route::get('/contacts', [ProductController::class, 'contacts'])->name('contacts');
    Route::get('/garantii', [ProductController::class, 'garantii'])->name('garantii');
    Route::get('/privacy', [ProductController::class, 'privacy'])->name('privacy');
    Route::get('/found-cheaper', [ProductController::class, 'foundcheaper'])->name('foundcheaper');


//  Route::get('/', [\App\Http\Controllers\PostController::class, 'home'])->name('home');


















