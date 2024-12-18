<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class WithdrawController extends Controller
{
    public function withdraw(){
        return view('user.withdraw');
    }


    public function withdrawStore(Request $request){
        $validate = $request->validate([
            'points' => 'required|numeric|min:1000|max:50000',
            'payment_method' => 'required',
            'upi_number' => 'nullable|digits:10',
            'accounts_holder_name' => 'nullable|string',
            'account_number' => 'nullable|string',
            'confirm_account_number' => 'nullable|same:account_number',
            'ifsc_code' => 'nullable|string',
            'bank_name' => 'nullable|string',
            'branch' => 'nullable|string'
        ]);

        $currentDate = Carbon::now()->format('Y-m-d');
        $balance = DB::table('users')->select('balance')->where('contact',Session::get('contact'))->first()->balance;

        if ($validate['points'] > $balance) {

            return redirect()->back()->withErrors(['points' => 'You do not have sufficient balance to withdraw the requested amount.']);
        }

        DB::table('withdraw')->insert([
            'name' => Session::get('name'),
            'number' => Session::get('contact'),
            'balance' => $balance,
            'points' => $validate['points'],
            'payment_method' => $validate['payment_method'],
            'upi_number' => $validate['upi_number'],
            'accounts_holder_name' => $validate['accounts_holder_name'],
            'account' => $validate['account_number'],
            'ifsc_code' => $validate['ifsc_code'],
            'bank_name' => $validate['bank_name'],
            'branch' => $validate['branch'],
            'created_at' => $currentDate
        ]);

        return redirect()->route('withdraw')->with('success','Your amount will be credited to your account shortly');
    }

    public function withdrawHistory(){

        $data = DB::table('withdraw')->select('id','balance','points','payment_method', 'status', DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d') AS created_at"))
        ->where('number',Session::get('contact'))
        ->orderBy('id','desc')->get();

        return view('user.withdraw_history',['data' => $data]);
    }
}
