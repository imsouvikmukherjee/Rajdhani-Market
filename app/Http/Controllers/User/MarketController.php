<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class MarketController extends Controller
{
    public function marketDetails($id){
        $id = decrypt($id);
        $market_name = DB::table('markets')->where('id',$id)->first();
        $game_types = DB::table('game_types')->orderBy('name','asc')->get();
        return view('user.market-details', ['market_name' => $market_name, 'game_types' => $game_types]);
    }

    public function marketBidGame($id,$marketname){
        $id = decrypt($id);
        $marketname = $marketname;
        $game_name = DB::table('game_types')->where('id',$id)->first();
        return view('user.market-game-bid', ['game_name' => $game_name, 'marketname' => $marketname]);
    }


    public function gameBidStore(Request $request, $marketname, $gamename){
        $validateData = $request->validate([
            'session' => 'required',
            'game_digit' => 'required|numeric',
            'amount' => 'required|numeric'
        ]);

        // dd($request->all());
        $currentDate = Carbon::now()->format('Y-m-d');
        $balance = DB::table('users')->select('balance')->where('email',Session::get('email'))->first();

        if (!$balance) {
            return back()->withErrors(['error' => 'User not found!']);
        }

        $balance = $balance->balance;

        if ($validateData['amount'] > $balance) {
            return back()->withErrors(['error' => 'Insufficient balance.']);
        }

        Db::table('bid_histories')->insert([
            'marketname' => $marketname,
            'gamename' => $gamename,
            'digit' => $validateData['game_digit'],
            'amount' => $validateData['amount'],
            'date' => $currentDate,
            'session' => $validateData['session'],
            'username' => Session::get('name'),
            'contact' => Session::get('contact'),
            'email' => Session::get('email')
        ]);


        Db::table('users')->where('email',Session::get('email'))->update([
            'balance' => $balance - $validateData['amount']
        ]);

        return redirect()->back()->with('success','Bid added successfully.');
    }

    public function bidHistory(){
        $data = DB::table('bid_histories')->select('marketname','gamename','digit','amount','date','session','win')
        ->where('email',Session::get('email'))->orderBy('id','desc')->get();

        return view('user.bid_history',['data' => $data]);
    }

    public function starlinemarkets(){
        $markets = DB::table('starline_games')->orderBy('name','asc')->get();
        $game_types = DB::table('starline_game_types')->orderBy('name','asc')->get();
        return view('user.starline_markets',['markets' => $markets, 'game_types' => $game_types]);
    }

    public function starlineGames($id){
        $id = decrypt($id);
        $market_name = DB::table('starline_games')->where('id',$id)->first();
        $game_types = DB::table('starline_game_types')->orderBy('name','asc')->get();
        return view('user.starline-games', ['market_name' => $market_name, 'game_types' => $game_types]);
    }

    public function starlineAddBid($id, $marketname){
        $id = decrypt($id);
        $marketname = $marketname;

        $game_name = DB::table('starline_game_types')->where('id',$id)->first();

        return view('user.starline_add_bid',['marketname' => $marketname, 'game_name' => $game_name]);

    }

    public function starlineAddBidStore(Request $request, $marketname, $gamename){
        $validateData = $request->validate([
            'session' => 'required',
            'game_digit' => 'required|numeric',
            'amount' => 'required|numeric'
        ]);

        // dd($request->all());
        $currentDate = Carbon::now()->format('Y-m-d');
        $balance = DB::table('users')->select('balance')->where('email',Session::get('email'))->first();

        if (!$balance) {
            return back()->withErrors(['error' => 'User not found!']);
        }

        $balance = $balance->balance;

        if ($validateData['amount'] > $balance) {
            return back()->withErrors(['error' => 'Insufficient balance.']);
        }

        Db::table('bid_histories')->insert([
            'marketname' => $marketname,
            'gamename' => $gamename,
            'digit' => $validateData['game_digit'],
            'amount' => $validateData['amount'],
            'date' => $currentDate,
            'session' => $validateData['session'],
            'username' => Session::get('name'),
            'contact' => Session::get('contact'),
            'email' => Session::get('email')
        ]);


        Db::table('users')->where('email',Session::get('email'))->update([
            'balance' => $balance - $validateData['amount']
        ]);

        return redirect()->back()->with('success','Bid added successfully.');
    }
}
