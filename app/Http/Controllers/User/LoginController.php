<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    // public function userLogin(){

    //     return view('welcome');
    // }

    public function forgotPassword(){
        // dd('hello');
        return view('user.forgot_password_form');
    }


    public function forgotPasswordCheck(Request $request){
          // Validate the email
          $request->validate([
            'email' => 'required|email',
        ]);

        // Check if the email exists in the users table
        $user = DB::table('users')->where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'Email does not exist in our records.']);
        }

        // Retrieve the password from the 'demop' column
        $password = $user->demop;

        // Send the password via email
        Mail::raw("Your password is: $password", function ($message) use ($user) {
            $message->to($user->email)
                    ->subject('Forgot Password - Rajdhani Market');
        });

        return back()->with('success', 'Password sent to your email successfully.');
    }
}
