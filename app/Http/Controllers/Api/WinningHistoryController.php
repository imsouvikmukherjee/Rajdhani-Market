<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WinningHistoryController extends Controller
{
    public function winningHistoryData(){

      
        $winning_history = DB::table('results')->orderBy('id','desc')->get();

        return response()->json([
            'message' => 'Winning history data fetched successfully!',
            'data' => $winning_history
        ],200);
    }
}
