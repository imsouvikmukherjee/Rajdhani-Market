<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DepositRequest;

class DepositController extends Controller
{
public function index( Request $request , $id ){
    $id = decrypt($id);
    $deposits = DepositRequest::find($id);

    return view('admin.edit_deposit', compact('deposits'));
}

public function update(Request $request, $id){
    $id = decrypt($id);
    $deposit = DepositRequest::find($id);

    // $deposit->amount = $request->amount;
    $deposit->payment_status = $request->payment;
    $deposit->save();

    return redirect()->route('deposit_request')->with('success', 'Deposit request updated successfully');
}


public function deposit_search(Request $request){
    $search = $request->search;
    $depositData = DepositRequest::where('number', 'LIKE', '%'.$search.'%')->paginate(10);
    return view('admin.deposit_request', compact('depositData'));
}
}
