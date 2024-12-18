<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Withdraw;

class WithdrawController extends Controller
{
    public function edit($id){
        // Edit withdrawal request

        $id = decrypt($id);
        // Fetch withdrawal request details from database
        $withdraw = Withdraw::find($id); // Replace with actual withdrawal request ID

        // Pass the withdrawal request details to the edit view
        return view('admin.edit_withdraw', compact('withdraw'));

    }

    public function update(Request $request, $id){
        // Update withdrawal request

        $id = decrypt($id);
        $withdraw = Withdraw::find($id); // Replace with actual withdrawal request ID

        // Validate request data
        $request->validate([
            // 'name' => 'required|min:1',
            // 'number' =>'required|numeric|min:1',
            // 'balance' =>'required|numeric',
            // 'amount' =>'required|numeric',
            // 'account' =>'required|numeric',
            // 'date' =>'required',


        ]);

        // Update withdrawal request details

        // $withdraw->name = $request->name;
        // $withdraw->number = $request->number;
        // $withdraw->balance = $request->balance;
        // $withdraw->amount = $request->amount;
        // $withdraw->account = $request->account;
        // $withdraw->date = $request->date;
        $withdraw->approval_date = $request->approval_date;
        // $withdraw->approval_time = $request->approval_time;
        $withdraw->status = $request->status;
        $withdraw->save(); // Replace with actual withdrawal request ID

        // Redirect to the withdrawal request list
        return redirect()->route('withdraw_request')->with('success', 'Withdrawal request updated successfully.');

}

    public function destroy($id){
        // Delete withdrawal request

        $id = decrypt($id);
        $withdraw = Withdraw::find($id); // Replace with actual withdrawal request ID

        // Delete withdrawal request from database
        $withdraw->delete(); // Replace with actual withdrawal request ID

        // Redirect to the withdrawal request list
        return redirect()->route('withdraw_request')->with('success', 'Withdrawal request deleted successfully.');
    }

    public function search(Request $request){
        $search = $request->search;
        $withdrawData = Withdraw::where('number', 'LIKE', '%'.$search.'%')->paginate(10);
        return view('admin.withdraw_req', compact('withdrawData'));
    }

}
