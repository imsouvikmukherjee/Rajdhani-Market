<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class DesawarController extends Controller
{
    public function desawar($id){
        $id = decrypt($id);
        $market = DB::table('gali_disawar')->where('id',$id)->first();
        return view('user.desawar', ['market' => $market]);
    }

    public function desawarMarket(){

        $markets = DB::table('gali_disawar')->orderBy('name','asc')->get();

        return view('user.desawar_market', ['markets' => $markets]);
    }

    public function disawarGameBid($markentname, $gamename){
        return view('user.disawar_add_bid',['marketname' => $markentname, 'gamename' => $gamename]);
    }


    public function disawarBidStore(Request $request, $marketname, $gamename){
        $validateData = $request->validate([

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
            'session' => 'N/A',
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
