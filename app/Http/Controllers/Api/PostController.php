<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Withdraw;
use App\Models\DepositRequest;

class PostController extends Controller
{
    public function withdraw( Request $request){

        $validateUser = Validator::make(
            $request->all(),
            [
                'name' => ['required'],
                'number' => ['required'],
                'balance' => ['required'],
                'amount' => ['required'],
                'date' => ['required'],

               
            ]
            );

            if($validateUser->fails()){
                return response()->json([
                    'status' => 'false',
                    'error' => 'Validation Error',
                   'message' => $validateUser->errors()->all(),
                ],401);
            } 

            $withdraw = Withdraw::create([
                'name' => $request->name,
                'number' => $request->number,
                'balance' => $request->balance,
                'amount' => $request->amount,
                'account' => $request->account,
                'ifsc_code' => $request->ifsc_code,
                'branch' => $request->branch,
                'bank_name' => $request->bank_name,
                'accounts_holder_name' => $request->accounts_holder_name,
                'phonepe' => $request->phonepe,
                'google_pay' => $request->google_pay,
                'paytm' => $request->paytm,
                'date' => $request->date,
                'approval_date' => $request->approval_date,
                'approval_time' => $request->approval_time,
               'status' => $request->status,

            ]);

            return response()->json([
               'status' => 'true',
               'message' => 'Withdrawal request submitted successfully',
                'withdrawal_request' => $withdraw,
            ],201);
    }


    // Deposit request
    public function deposit(Request $request){
        $validateUser = Validator::make(
            $request->all(),
            [
                'name' => ['required'],
                'number' => ['required'],
                'amount' => ['required'],
                'balance' => ['required'],
                'date' => ['required'],
               
            ]
            );

            if($validateUser->fails()){
                return response()->json([
                   'status' => 'false',
                    'error' => 'Validation Error',
                   'message' => $validateUser->errors()->all(),
                ],401);
            } 

            $deposit = DepositRequest::create([
                'name' => $request->name,
                'number' => $request->number,
                'amount' => $request->amount,
                'balance' => $request->balance,
                'date' => $request->date,
                'payment_status' => $request->payment_status,

            ]);

            return response()->json([
                'status' => 'true',
                'message' => 'Deposit request submitted successfully',
                 'withdrawal_request' => $deposit,
             ],201);


        }
}
