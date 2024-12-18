<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Mail;
use Illuminate\Support\Facades\Mail;
use App\Mail\RajdhaniMail;
use Illuminate\Support\Facades\DB;

class MailController extends Controller
{
    public function forgotPassword(Request $request){

        $validate = $request->validate([
            'email' => 'required|email'
         ]);
   
         $email = $request->input('email');

         $userExists = DB::table('users')->where('email', $email)->exists();
         $user = DB::table('users')->where('email', $email)->first();
         
         if($userExists){
            $maildata = [
                'message' => 'This is your password to login that app',
                'password' => $user->demop
            ];
    
            Mail::to($email)->send(new RajdhaniMail($maildata));
            return response()->json([
                'success' => true,
                'message' => 'Mail sent successfully!',
            ],200);
         }else{
            return response()->json([
                'success' => false,
                'message' => 'Email does not exist in the database.'
            ], 404);
         }
        
       
    }
}
