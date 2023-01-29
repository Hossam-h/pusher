<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\PaddelController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/save_task', [App\Http\Controllers\TaskController::class, 'store'])->name('save_task');



route::get('createpaypal',[PaypalController::class,'createpaypal'])->name('createpaypal');

route::get('processPaypal',[PaypalController::class,'processPaypal'])->name('processpaypal');

route::get('processSuccess',[PaypalController::class,'processSuccess'])->name('processsuccess');

route::get('processCancel',[PaypalController::class,'processCancel'])->name('processcancel');


route::get('paid_paddle',[PaddelController::class,'paid'])->middleware('auth');



Route::get('/stripe', [App\Http\Controllers\StripePaymentController::class,'stripe'])->name('stripe');
Route::post('/stripe', [App\Http\Controllers\StripePaymentController::class,'stripePost'])->name('stripe.post');




Route::get('/send',function (){
    Mail::to('hossamibrahim66666@gmail.com')->send(new \App\Mail\test());

    return 'end';

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
