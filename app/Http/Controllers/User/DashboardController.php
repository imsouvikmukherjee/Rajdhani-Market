<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function userDashboard(){
        $balance = DB::table('users')->select('balance')->where('contact',Session::get('contact'))->first();

        // $markets = DB::table('markets')->select('markets.*')->orderBy('id','desc')->get();
        // dd($markets);
        // echo "hello";
        $markets = DB::table('results')->select('markets.name','markets.id as id','results.*','results.id as resultid')
        ->join('markets','results.market','=','markets.id')->orderBy('markets.name','asc')->get();
        // dd($result);

        // dd($markets);
        return view('user.dashboard',['balance' => $balance, 'markets' => $markets]);
    }
}
