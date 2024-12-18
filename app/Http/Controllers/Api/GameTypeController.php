<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Game_type;

class GameTypeController extends Controller
{
 public function index(){

    $game_types = Game_type::all();
    return response()->json($game_types );
    
 }
}
