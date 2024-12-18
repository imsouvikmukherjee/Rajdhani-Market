<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DigitController extends Controller
{
    public function digit(){
        return view('user.digit');
    }
}
