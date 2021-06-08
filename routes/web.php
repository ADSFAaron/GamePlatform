<?php

<<<<<<< HEAD
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
=======
>>>>>>> 389a4f4e61b25c0a45eefdb8bcab81fa03f24e6e
use Illuminate\Support\Facades\Route;

use \App\Http\Livewire\GamePlatform;
use \App\Http\Livewire\ShopComponent;
use \App\Http\Livewire\CartComponent;
use \App\Http\Livewire\CheckoutComponent;
use \App\Http\Livewire\DetailsComponent;
use \App\Http\Livewire\SearchComponent;

use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
<<<<<<< HEAD
=======
use App\Http\Livewire\Admin\AdminProductComponent;
>>>>>>> 389a4f4e61b25c0a45eefdb8bcab81fa03f24e6e


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

//Route::get('/', function () {
//    return view('welcome');
//});

// Home Page
Route::get('/', GamePlatform::class);

// Other SubPages
Route::get('/shop', ShopComponent::class);

Route::get('/cart', CartComponent::class)->name('product.cart');

Route::get('/checkout', CheckoutComponent::class);

Route::get('/product/{slug}', DetailsComponent::class)->name('product.details');

Route::get('/search', SearchComponent::class)->name('product.search');

Route::get('/product-category/{category_slug}',CategoryComponent::class)->name('product.category');

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

// For USER or CUSTOMER
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});

// FOR ADMIN
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/categories',AdminCategoryComponent::class)->name('admin.categories');
<<<<<<< HEAD
    Route::get('/admin/category/add',AdminAddCategoryComponent::class)->name('admin.addcategory') ;
=======
    Route::get('/admin/products',AdminProductComponent::class)->name('admin.products');
>>>>>>> 389a4f4e61b25c0a45eefdb8bcab81fa03f24e6e
});
