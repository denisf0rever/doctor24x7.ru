<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
use App\Services\TelegramBot\TelegramNotifier;

use App\Http\Controllers\Payment\PaymentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/payment/status', [PaymentController::class, 'status'])->name('payment.status');
Route::post('/analitycs/calculator/ndfl', function () { 
$notifier = new TelegramNotifier('НДФЛ сработал');
$notifier->notify(); 
return response()->json(['message' => 'OK'], Response::HTTP_OK);})->name('analitycs.calculator.ndfl');