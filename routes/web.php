<?php

use App\Http\Controllers\Admin\WithdrawController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\AddBalanceController;
use App\Http\Controllers\User\CommingSoonController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\DesawarController;
use App\Http\Controllers\User\DigitController;
use App\Http\Controllers\User\GameTimingController;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\MarketController;
use App\Http\Controllers\User\NoticeController;
use App\Http\Controllers\User\WithdrawController as UserWithdrawController;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('auth.login');
})->name('home');

Route::get('user/dashboard', function () {
    // $markets = DB::table('markets')->select('markets.*')->orderBy('id','desc')->get();
    // $markets = DB::table('results')->select('markets.name','markets.start_time','markets.close_time','markets.status','markets.id as id','results.*','results.id as resultid')
    // ->join('markets','results.market','=','markets.id')->orderBy('markets.name','asc')->get();

    $numbers = DB::table('number_details')->where('id',1)->first();

    $markets = DB::table('results')
    ->select(
        'markets.name',
        'markets.start_time',
        'markets.close_time',
        'markets.status',
        'markets.id as id',
        'results.market',
        'results.date',
        'results.session',
        'results.open_pana',
        'results.open_result',
        'results.close_pana',
        'results.close_result'
    )
    ->rightJoin('markets', 'results.market', '=', 'markets.id')
    ->orderBy('markets.name', 'asc')
    ->get();
    return view('user.dashboard',['markets' => $markets, 'numbers' => $numbers]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth','verified')->group(function () {
Route::middleware('user','verified')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('user/comming-soon',[CommingSoonController::class,'commingsoon'])->name('comming_soon');

    // Route::get('user/dashboard',[DashboardController::class,'userDashboard'])->name('user_dashboard');

    Route::get('user/desawar/{id}',[DesawarController::class,'desawar'])->name('desawar');
    Route::get('/user/disawar-add-bid/{marketname}/{gamename}',[DesawarController::class,'disawarGameBid']);
    Route::post('/user/disawar-add-bid-store/{marketname}/{gamename}',[DesawarController::class,'disawarBidStore']);



    Route::get('user/digit',[DigitController::class,'digit'])->name('digit');

    Route::get('user/game-timing',[GameTimingController::class,'gameTiming'])->name('game_timing');

    Route::get('/user/add-balance',[AddBalanceController::class,'addBalance'])->name('add_balance');
    Route::post('/user/add-balance-store',[AddBalanceController::class,'addBalanceStore'])->name('add_balance_store');

    Route::get('/user/deposit-history',[AddBalanceController::class,'depositHistory'])->name('deposit_history');

    Route::get('/user/withdraw',[UserWithdrawController::class,'withdraw'])->name('withdraw');
    Route::post('/user/withdraw-store',[UserWithdrawController::class,'withdrawStore'])->name('withdraw_store');
    Route::get('/user/withdraw-history',[UserWithdrawController::class,'withdrawHistory'])->name('withdraw_history');
    Route::get('user/market-details/{id}',[MarketController::class,'marketDetails']);
    Route::get('/user/market-game-bid/{id}/{marketname}',[MarketController::class,'marketBidGame']);
    Route::post('/user/market-game-bid-store/{marketname}/{gamename}',[MarketController::class,'gameBidStore'])->name('game_bid_store');
    Route::get('/user/bid-history',[MarketController::class,'bidHistory'])->name('bid_history');
    Route::get('/user/desawar-market',[DesawarController::class,'desawarMarket'])->name('desawar_market');


    Route::get('/starline-markets',[MarketController::class,'starlinemarkets'])->name('starline_markets');
    Route::get('/starline-games/{id}',[MarketController::class,'starlineGames'])->name('starline_games');
    Route::get('/starline-games-add-bid/{id}/{marketname}',[MarketController::class,'starlineAddBid'])->name('starline_add_bid');
    Route::post('/starline-games-add-bid-store/{marketname}/{gamename}',[MarketController::class,'starlineAddBidStore'])->name('starline_add_bid_store');

    Route::get('user/notice',[NoticeController::class,'userNotice'])->name('user_notice');
    Route::get('/user/about',[NoticeController::class,'about'])->name('about');
    Route::get('/user/change-password',[NoticeController::class,'changePassword'])->name('change_password');
    Route::post('user/change-password-store',[NoticeController::class,'changepasswordStore'])->name('user_change_password_store');

    Route::get('/user/how-to-play',function(){
        return view('user.howtoplay');
    });

    Route::get('/user/game-rate',function(){
        return view('user.gamerate');
    });

    Route::get('/user/contact-us',function(){
        $numbers = DB::table('number_details')->where('id',1)->first();
        return view('user.contact-us',['numbers' => $numbers]);
    });
});
});

Route::get('user/forgot-password-form',[LoginController::class,'forgotPassword'])->name('forgot_password_form');
Route::post('user/forgot-password-check',[LoginController::class,'forgotPasswordCheck'])->name('forgot_password_check');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
