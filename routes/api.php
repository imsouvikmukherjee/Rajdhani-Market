<?php

use App\Http\Controllers\Admin\MailController;
use App\Http\Controllers\Admin\NavController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BidController;
use App\Http\Controllers\Api\GameTypeController;
use App\Http\Controllers\Api\GetApiController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\SangamController;
use App\Http\Controllers\Api\WinningHistoryController;
use App\Http\Controllers\UpiController;
use App\Models\DepositRequest;
use App\Models\Withdraw;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post('signup', [AuthController::class, 'signup']);
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

// game type 
Route::get('game_types', [GameTypeController::class, 'index']);

// market 
Route::get('market',[GetApiController::class, 'market']);
// declare result 
Route::get('declear-result',[GetApiController::class, 'declearResult']);


// bid history 
Route::post('bid_history/store', [BidController::class, 'store']);

// Withdraw 
Route::post('withdraw_request', [PostController::class, 'withdraw']);

//Deposit
Route::post('deposit_request', [PostController::class, 'deposit']);
 
// Deposit request
Route::get('deposit_request/data',[GetApiController::class, 'deposit']);
Route::get('/winning-history',[WinningHistoryController::class,'winningHistoryData']);

// Route::post('/forgot-password',[NavController::class,'forgotPassword'])->name('forgot_password');

// Route::post('/forgot-password',[GetApiController::class,'forgotPassword'])->name('forgot_password');
Route::post('/forgot-password',[MailController::class,'forgotPassword']);

Route::get('/gali-disawar',[GetApiController::class,'galiDisawar']);
Route::get('/starline-games',[GetApiController::class,'starlineGames']);

Route::get('/rajdhani-users',[GetApiController::class,'rajdhaniUsers']);

Route::post('/update-balance/{number}', [GetApiController::class, 'updateBalance']);

Route::post('/deposit-data-add-pop',[GetApiController::class,'depositAddData']);


// upi 
Route::get('/upi', [UpiController::class, 'apiIndex']);

// sangam 
Route::post('/store_halfsangam', [SangamController::class, 'storeHalfSangam']);
Route::post('/store_fullsangam', [SangamController::class, 'storeFullSangam']);