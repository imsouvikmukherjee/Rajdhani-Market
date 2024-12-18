<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommingSoonController extends Controller
{
    public function commingsoon(){

        return view('user.comming_soon');
    }
}
