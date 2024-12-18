<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GameTimingController extends Controller
{
    public function gameTiming(){
        return view('user.game_timing');
    }
}
