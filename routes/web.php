<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [ProductsController::class, 'index'])->name('allProducts');

Route::get('/products', [ProductsController::class, 'index'])->name('allProducts');

//Men prod categ
Route::get('/products/men', [ProductsController::class, 'menProducts'])->name('menProducts');

//Wpmen prod categ
Route::get('/products/wemen', [ProductsController::class, 'womenProducts'])->name('womenProducts');

//Search
Route::get('/search', [ProductsController::class, 'search'])->name('searchProducts');

Route::get('product/addToCart/{id}', [ProductsController::class, 'addProductToCart'])->name('AddToCartProduct');

//See a product
Route::get('product/{id}', [ProductsController::class, 'seeAProduct'])->name('SeeAProduct');

//Show cart items
Route::get('cart', [ProductsController::class, 'showCart'])->name('cartproducts');

//Delete item from cart
Route::get('product/deleteItemFromCart/{id}', [ProductsController::class, 'deleteItemFromCart'])->name('DeleteItemFromCart');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin panel
//Route::get('/admin/products', [App\Http\Controllers\Admin\AdminProductsController::class, 'index'])->name('adminDisplayProducts')->middleware('restrictToAdmin');
Route::get('/admin/products', [App\Http\Controllers\Admin\AdminProductsController::class, 'index'])->name('adminDisplayProducts');

//Order page
Route::get('/admin/orders', [App\Http\Controllers\Admin\AdminProductsController::class, 'adminOrders'])->name('adminUserOrders');

//Display edit product form
Route::get('/admin/editProductForm{id}', [App\Http\Controllers\Admin\AdminProductsController::class, 'editProductForm'])->name('adminEditProductForm');

//Display edit product image form
Route::get('/admin/editProductImageForm/{id}', [App\Http\Controllers\Admin\AdminProductsController::class, 'editProductImageForm'])->name('adminEditProductImageForm');

//Update product image
Route::post('/admin/updateProductImage/{id}', [App\Http\Controllers\Admin\AdminProductsController::class, 'updateProductImage'])->name('adminupdateProductImage');

//Update product data
Route::post('/admin/updateProducts/{id}', [App\Http\Controllers\Admin\AdminProductsController::class, 'updateProduct'])->name('adminUpdateProduct');

//Display create product form
Route::get('/admin/createProductForm', [App\Http\Controllers\Admin\AdminProductsController::class, 'createProductForm'])->name('adminCreateProductForm');


//Change order status
Route::get('/admin/changeOrderStatus/{id}', [App\Http\Controllers\Admin\AdminProductsController::class, 'changeOrderStatus'])->name('changeOrderStatus');


//Send new product data to database
Route::post('/admin/sendCreateProductForm/', [App\Http\Controllers\Admin\AdminProductsController::class, 'sendCreateProductForm'])->name('adminSendCreateProductForm');

Route::get('/admin/deleteProduct/{id}', [App\Http\Controllers\Admin\AdminProductsController::class, 'deleteProduct'])->name('adminDeleteProduct');

//Increase product number
Route::get('/product/increaseSingleProduct/{id}', [ProductsController::class, 'increaseSingleProduct'])->name('IncreaseSingleProduct');

//Decrease product number
Route::get('/product/decreaseSingleProduct/{id}', [ProductsController::class, 'decreaseSingleProduct'])->name('DecreaseSingleProduct');

//Create order
Route::get('/product/checkoutProducts/', [ProductsController::class, 'checkoutProducts'])->name('checkoutProducts');

//Create order
Route::post('/product/createOrder', [ProductsController::class, 'createOrder'])->name('createOrder');
