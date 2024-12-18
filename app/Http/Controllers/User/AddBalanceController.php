<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class AddBalanceController extends Controller
{
    public function addBalance(){
        return view('user.add_balance');
    }


    public function addBalanceStore(Request $request){
        $validate = $request->validate([
            'amount' => 'required|numeric',
            'option' => 'required'
        ]);

        $balance = DB::table('users')->select('balance')->where('contact',Session::get('contact'))->first()->balance;

        do {

            $depositId = random_int(10000000, 99999999);


            $exists = DB::table('deposit_request')->where('deposit_id', $depositId)->exists();
        } while ($exists);

        $currentDate = Carbon::now()->format('Y-m-d');

        DB::table('deposit_request')->insert([
            'deposit_id' => $depositId,
            'name' => Session::get('name'),
            'number' => Session::get('contact'),
            'amount' => $validate['amount'],
            'balance' => $balance,
            'payment_method' => $validate['option'],
            'created_at' => $currentDate

        ]);

        if($request->option == 0){
            $upi = DB::table('qr_code')->where('id', 2)->first();
            return view('user.phonepe_deposit', ['upi' => $upi]);
        }elseif($request->option == 1){
            $upi = DB::table('qr_code')->where('id', 2)->first();
            return view('user.googlepay_deposit' , ['upi' => $upi]);
        }else{
            $upi = DB::table('qr_code')->where('id', 2)->first();
            return view('user.paytm_deposit', ['upi' => $upi]);
        }



    }


    public function depositHistory(){

        $data = DB::table('deposit_request')->select('id','deposit_id','amount','payment_status','payment_method', DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d') AS created_at"))
        ->where('number',Session::get('contact'))
        ->orderBy('id','desc')->get();

        return view('user.deposit_history',['data' => $data]);
    }
}
