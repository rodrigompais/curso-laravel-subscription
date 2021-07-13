<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\Subscription\SubscriptionController;
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
Route::get('subscriptions/resume', [SubscriptionController::class, 'resume'])->name('subscriptions.resume');
Route::get('subscriptions/cancel', [SubscriptionController::class, 'cancel'])->name('subscriptions.cancel');
Route::get('subscriptions/invoice/{invoice}', [SubscriptionController::class, 'downloadInvoice'])->name('subscriptions.invoice.download');
Route::get('subscriptions/account', [SubscriptionController::class, 'account'])->name('subscriptions.account');
Route::post('subscriptions/store', [SubscriptionController::class, 'store'])->name('subscriptions.store');
Route::get('subscriptions/checkout', [SubscriptionController::class, 'index'])->name('subscriptions.checkout');
Route::get('subscriptions/premium', [SubscriptionController::class, 'premium'])->name('subscriptions.premium')->middleware('subscribed'); 

Route::get('/assinar/{url}', [SiteController::class, 'createSessionPlan'])->name('choice.plan');
Route::get('/', [SiteController::class,'index'])->name('site.home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
