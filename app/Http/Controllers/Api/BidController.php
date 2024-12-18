<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin\BidHistory;
use Illuminate\Support\Facades\DB;

// use App\Models\Admin\Game_type;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation rules
        $rules = [
            'marketname' => 'required',
            'gamename' => 'required',
            'digit' => 'required',
            'amount' => 'required',
            'date' => 'required',
            'session' => 'nullable',
            'username' => 'nullable', // Assuming cdigit is optional
            'contact' => 'nullable',   // Assuming pana is optional
            'email' => 'nullable|email', // Assuming points is optional and must be integer >= 0
          
          
        ];

        // Validate request data
        $validator = Validator::make($request->all(), $rules);

        // Check for validation failure
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation Error',
                'errors' => $validator->errors(),
            ], 401);
        }

        // Create new bid history record
       $bid =  DB::table('bid_histories')->insert([
            'marketname' => $request->marketname,
            'gamename' => $request->gamename,
            'digit' => $request->digit,
            'amount' => $request->amount,
            'date' => $request->date,
            'session' => $request->session,
            'username' => $request->username,
            'contact' => $request->contact,
            'email' => $request->email,
            
        ]);

        // Return JSON response for successful creation
        return response()->json([
            'status' => 'success',
            'message' => 'Bid created successfully',
            'bid' => $bid,
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
