<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\FrontendUserProfileController;
use App\Http\Controllers\Frontend\FrontendPageController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ProductAdminController;
use App\Http\Controllers\Backend\StripeController;
use App\Http\Controllers\Backend\CODController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\CartPageController;

use App\Models\Admin;

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
    //return view('welcome');
    $user = Auth::user();
    return view('home', compact('user'));
});

Route::get('/contact', function () {
    return view('frontend.page.contact');
})->name('user.contact');


// user
// user middlware to group route request????
Route::middleware(['auth:web'])->group(function () {

    // muon dung class FrontendUserProfileController ?? import Controller FrontendUserProfileController
    Route::middleware(['auth:sanctum, web', 'verified'])->get('/dashboard', [FrontendUserProfileController::class, 'userdashboard'])->name('dashboard');

    Route::prefix('/user')->group(function () {
        Route::get('/logout', [FrontendUserProfileController::class, 'userlogout'])->name('user.logout');
        Route::get('/profile', [FrontendUserProfileController::class, 'userprofile'])->name('user.profile');
        Route::post('/profile', [FrontendUserProfileController::class, 'userprofileupdate'])->name('user.profile');
        Route::get('/password/change', [FrontendUserProfileController::class, 'userpasswordchange'])->name('user.change.password');
        Route::post('/password/update', [FrontendUserProfileController::class, 'userpasswordupdate'])->name('user.update.password');

    });

});

//Wishlist routes
Route::group(['prefix' => 'user'], function () {

    //stripe payment route
    Route::post('/stripe/v1/payment', [StripeController::class, 'stripeOrder'])->name('stripe.order');

    //COD payment route
    Route::post('/cod/v1/payment', [CODController::class, 'CODOrder'])->name('cod.order');


});

// Add to cart Product route
Route::get('/product/{id}', [FrontendPageController::class, 'productDeatil'])->name('frontend-product-details');
Route::get('/product/addToCart/{id}', [CartController::class, 'addToCart'])->name('frontend.product.addToCart');

// Cart page routes
Route::get('/my-cart', [CartPageController::class, 'myCartView'])->name('myCartView');
Route::get('/my-cart/list', [CartPageController::class, 'showmyCartList'])->name('showmyCartList');
Route::get('/remove/from-cart/{rowId}', [CartPageController::class, 'removeFromCart'])->name('removeFromCart');
Route::get('/add/in-cart/{rowId}', [CartPageController::class, 'addQtyToCart'])->name('addQtyToCart');
Route::get('/reduce/from-cart/{rowId}', [CartPageController::class, 'reduceQtyFromCart'])->name('reduceQtyFromCart');

//Checkout page routes
Route::get('/checkout-page', [CheckoutController::class, 'checkoutPage'])->name('checkout-page');
Route::post('/checkout-store', [CheckoutController::class, 'checkoutStore'])->name('checkout.store');

//admin
// route dành khi đã xác thực là role admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('baker_ntd/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
});

// route dành khi đã xác thực là role admin
Route::middleware(['auth:admin'])->group(function () {

    // Admin Logout/password change and profile routes
    Route::prefix('/admin')->group(function () {
        Route::get('/logout', [AdminController::class, 'destroy'])->name('admin.logout');
        Route::resource('/profile', AdminProfileController::class);
        Route::get('/edit/profile', [AdminProfileController::class, 'AdminProfileEdit'])->name('admin.profile.edit');
        Route::get('/change/password', [AdminProfileController::class, 'AdminPasswordChange'])->name('admin.change.password');
        Route::post('/change/password', [AdminProfileController::class, 'AdminPasswordUpdate'])->name('admin.password.update');
    });

    // Admin Dashboard routes
    Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
        $adminData = Admin::find(1);
        return view('admin.index', compact('adminData'));
    })->name('admin.dashboard');


    // Admin Dashboard all functionality/features routes
    Route::prefix('/admin')->group(function () {

        Route::resource('/user', UserController::class);
        Route::get('/edit/user/{user}', [UserController::class, 'UserProfileEdit'])->name('admin.user.edit');

        Route::resource('/order', OrderController::class);
        Route::resource('/productAdmin', ProductAdminController::class);


    });

});


Route::prefix('shop')->group(function () {
    Route::get('/product/{id}', [ProductController::class, 'show']);

    Route::get('/', [ProductController::class, 'index']);

    Route::get('/{categoryName}', [ProductController::class, 'category']);
});