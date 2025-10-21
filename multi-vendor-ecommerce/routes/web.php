<?php
// Admin routes link //

// seller routes link//
use App\Http\Controllers\Seller\SellerMainController;
use App\Http\Controllers\Seller\SellerProductController;
use App\Http\Controllers\Seller\SellerStoreController;
use App\Http\Controllers\Customer\CustomerMainController;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('front_end.home.website');
// });


// Vendor routes //
Route::middleware(['auth', 'verified','rolemanager:vendor'])->group(function () {
    Route::prefix('vendor')->group(function(){
        Route::controller(SellerMainController::class)->group(function(){
        Route::get('/dashboard','index')->name('vendor');
        Route::get('/add_user','add_user')->name('vendor.usermanagement.add_user');
        Route::get('/view_all_user','view_all_user')->name('vendor.usermanagement.view_all_user');
        Route::get('/user_account_status','user_account_status')->name('vendor.usermanagement.user_account_status');
        });

    });
});
// Customer Routes //
Route::middleware(['auth', 'verified','rolemanager:customer'])->group(function () {
    Route::prefix('user')->group(function(){
        Route::controller(CustomerMainController::class)->group(function(){
        Route::get('/dashboard','index')->name('dashboard');
        Route::get('/order/history','history')->name('customer.history');
        Route::get('/setting/payment','payment')->name('customer.payment');
        Route::get('/affiliate','affiliate')->name('customer.affiliate');
        });
    });
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
