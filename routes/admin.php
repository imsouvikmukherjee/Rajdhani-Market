<?php

use App\Http\Controllers\Admin\DepositController;
use App\Http\Controllers\Admin\Game_type_controller;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\MarketController;
use App\Http\Controllers\Admin\NavController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\ResultController;
use App\Http\Controllers\Admin\WinningHistoryController;
use App\Http\Controllers\Admin\WithdrawController;
use App\Http\Controllers\Api\SangamController;
use App\Http\Controllers\UpiController;
use Illuminate\Support\Facades\Route;


// Admin Authentication Routes
// Route::post('/admin/signup', [LoginController::class, 'signup'])->name('admin.signup');
// Route::post('/admin/login', [LoginController::class, 'login'])->name('login.submit');
// Route::post('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

// Navbar Routes (admin)
// Route::get('/login',[NavController::class, 'index'])->name('login');


// Route::group(['middleware' => 'auth:admin'], function () {
    Route::middleware('auth','verified')->group(function () {
    Route::middleware('admin','verified')->group(function () {

Route::get('/dashboard', [NavController::class, 'dashboard'  ])->name('admin.dashboard');
    Route::get('/markets',         [NavController::class, 'markets'          ])->name('markets');
    Route::get('/games_type',      [NavController::class, 'game_type'        ])->name('games_type');
    Route::get('/declare_result',  [NavController::class, 'declare_result'   ])->name('declare_result');
    Route::get('/open_load',       [NavController::class, 'open_load'        ])->name('open_load');
    Route::get('/close_load',      [NavController::class, 'close_load'       ])->name('close_load');
    Route::get('/winning_history', [NavController::class, 'winning_history'  ])->name('winning_history');
    Route::get('/bid_history',     [NavController::class, 'bid_history'      ])->name('bid_history');
    Route::get('/withdraw_request',[NavController::class, 'withdraw_request' ])->name('withdraw_request');
    Route::get('/users',           [NavController::class, 'users'            ])->name('users');
    Route::get('/deposit_request', [NavController::class, 'deposit_request'  ])->name('deposit_request');
    Route::get('/banner',          [NavController::class, 'banner'           ])->name('banner');
    Route::get('/minimum_limit',   [NavController::class, 'minimum_limit'    ])->name('minimum_limit');
    Route::get('/notification',    [NavController::class, 'notification'     ])->name('notification');
    Route::get('/upi',             [NavController::class, 'upi'              ])->name('upi');
    Route::get('/winning_rate',    [NavController::class, 'winning_rate'     ])->name('winning_rate');
    Route::get('/contact',         [NavController::class, 'contact'          ])->name('contact');
    Route::get('/bid-history/delete/{id}',[NavController::class,'bidHistoryDelete']);

    Route::get('/user-delete/{id}',[NavController::class,'userDelete']);
    Route::get('/user-bank-balance-edit/{id}',[NavController::class,'editbankBalance'])->name('edit_bank_balance');
    Route::post('/user-bank-balance-edit-store/{id}',[NavController::class,'editbankBalanceStore'])->name('edit_bank_balance_store');


// Market Route
Route::get('add_market', [MarketController::class, 'index'])->name('add_market_view');
Route::post('add_market', [MarketController::class, 'store'])->name('add_market');
Route::get('view_market/{id}', [MarketController::class, 'view'])->name('view_market');
Route::get('edit_market/{id}', [MarketController::class, 'edit'])->name('edit_market_view');
Route::post('markets/update/{id}', [MarketController::class, 'update'])->name('edit_market');
Route::get('markets/delete/{id}', [MarketController::class, 'destroy'])->name('delete_market');
// search function
Route::get('markets/search', [MarketController::class, 'search'])->name('search_market');

Route::get('markets/status/{id}', [MarketController::class, 'status'])->name('status_market');
Route::get('markets/monday/status/{id}', [MarketController::class, 'monday'])->name('monday.status');
Route::get('markets/tuesday/status/{id}', [MarketController::class, 'tuesday'])->name('tuesday.status');
Route::get('markets/wednesday/status/{id}', [MarketController::class, 'wednesday'])->name('wednesday.status');
Route::get('markets/thursday/status/{id}', [MarketController::class, 'thursday'])->name('thursday.status');
Route::get('markets/friday/status/{id}', [MarketController::class, 'friday'])->name('friday.status');
Route::get('markets/saturday/status/{id}', [MarketController::class, 'saturday'])->name('saturday.status');
Route::get('markets/sunday/status/{id}', [MarketController::class, 'sunday'])->name('sunday.status');


Route::get('/user/search',[NavController::class, 'userSearch'])->name('user_search');


// Starline games

Route::get('/starline-games',[NavController::class,'starlineGames'])->name('starline_games');
Route::get('/add-starline-games',[NavController::class,'addStarlineGames'])->name('add_starline_games');
Route::post('starline-games-store',[NavController::class,'starlineGamesStore'])->name('starline_games_store');
Route::get('starline-games-delete/{id}',[NavController::class,'starlinkGamesDelete']);
Route::get('starline-games-edit/{id}',[NavController::class,'starlineGamesEdit']);
Route::post('starline-games-edit-store/{id}',[NavController::class,'starlineGamesEditStore']);
Route::get('/starline-game-types',[NavController::class,'starlineGameTypes'])->name('starline_game_types');
Route::get('/add-starline-game-types',[NavController::class,'addStarlineGameTypes'])->name('add_starline_game_types');
Route::post('/add-starline-game-types-store',[NavController::class,'addStarlineGameTypesStore'])->name('add_starline_game_types_store');
Route::get('/starline-game-types-delete/{id}',[NavController::class,'starlineGameTypesDelete']);

// Gali

Route::get('/gali',[NavController::class,'gali'])->name('gali');
Route::get('/add-gali-disawar',[NavController::class,'addGali'])->name('add_gali');
Route::post('/add-gali-disawar-store',[NavController::class,'addGaliStore'])->name('add_gali_store');
Route::get('/gali-delete/{id}',[NavController::class,'galiDelete']);
Route::get('/gali-edit/{id}',[NavController::class,'galiEdit'])->name('gali_edit');
Route::post('/gali-edit-store/{id}',[NavController::class,'galiEditStore'])->name('gali_edit_store');


// Result routes
Route::get('add_result', [ResultController::class, 'index'])->name('add_result');
Route::post('store_result', [ResultController::class, 'store'])->name('store_result');
Route::get('edit_result/{id}', [ResultController::class, 'edit'])->name('edit_result');
// search function
Route::get('declare_result/search', [ResultController::class, 'search'])->name('search_result');
Route::post('declare/update_result/{id}', [ResultController::class, 'update'])->name('update_result');
Route::get('declare/delete_result/{id}', [ResultController::class, 'delete'])->name('delete_result');
Route::get('declare/result_details/{id}', [ResultController::class, 'view'])->name('result_details');

// Route::get('/winning-history',[WinningHistoryController::class,'winningHistoryData'])->name('winning.history.data');

// games types
Route::get('/game_types/add',[Game_type_controller::class, 'index'])->name('game_types');
Route::post('/game_types/store',[Game_type_controller::class, 'store'])->name('game_types.store');
Route::get('/game_types/edit/{id}',[Game_type_controller::class, 'edit'])->name('game_type_edit');
Route::post('/game_types/update/{id}',[Game_type_controller::class, 'update'])->name('game_type_updated');
Route::get('/game_types/delete/{id}',[Game_type_controller::class, 'delete'])->name('game_type.delete');
Route::get('/game_types/search',[Game_type_controller::class, 'search'])->name('game_type.search');


// withdraw
Route::get('/withdraw/edit/{id}', [WithdrawController::class, 'edit'])->name('withdraw.edit');
Route::post('/withdraw/update/{id}', [WithdrawController::class, 'update'])->name('withdraw.update');
Route::get('/withdraw_request/delete/{id}', [WithdrawController::class, 'destroy'])->name('withdraw.delete');
Route::get('/withdraw_request/search',[WithdrawController::class, 'search'])->name('withdraw.search');

// deposit
Route::get('/deposit/edit/{id}', [DepositController::class, 'index'])->name('deposit.edit');
Route::post('/deposit/update/{id}', [DepositController::class, 'update'])->name('deposit.update');
Route::get('/deposit_request/delete/{id}', [DepositController::class, 'destroy_deposit'])->name('deposit.delete');
Route::get('/deposit_request/search',[DepositController::class, 'deposit_search'])->name('deposit.search');



// upi
Route::get('/upi', [UpiController::class, 'index'])->name('upi');
Route::get('/upi-edit/{id}', [UpiController::class, 'edit'])->name('upi-edit');
Route::put('/upi-update/{id}', [UpiController::class, 'update'])->name('upi-update');


Route::get('/half_sangam', [SangamController::class, 'getHalfSangam'])->name('admin.half_sangam');
Route::get('/full_sangam', [SangamController::class, 'getFullSangam'])->name('admin.full_sangam');
Route::get('/delete-half_sangam/{id}', [SangamController::class, 'deleteHalfSangam'])->name('admin.delete_half_sangam');
Route::get('/delete-full_sangam/{id}', [SangamController::class, 'deleteFullSangam'])->name('admin.delete_full_sangam');



Route::post('/admin/change-win-status/{id}',[NavController::class,'changeWinStatus']);

Route::get('/admin/notice',[NoticeController::class,'notice'])->name('notice');
Route::get('admin/add-notice',[NoticeController::class,'addNotice'])->name('add_notice');
Route::post('/admin/add-notice-store',[NoticeController::class,'addNoticeStore'])->name('add_notice_store');
Route::get('/admin/notice-delete/{id}',[NoticeController::class,'noticeDelete'])->name('NoticeDelete');

Route::get('/admin/number-update/{id}',[NoticeController::class,'numberUpdate'])->name('number_update');
Route::post('/admin/number-update-store/{id}',[NoticeController::class,'numberUpdateStore']);

Route::get('/admin/qr-update',[NoticeController::class,'qrUpdate']);
Route::post('/upload-qr', [NoticeController::class, 'qrstore'])->name('upload.qr');


});
});

// Route::middleware('auth:admin')->get('/dashboard', [NavController::class, 'dashboard'  ])->name('admin.dashboard');

