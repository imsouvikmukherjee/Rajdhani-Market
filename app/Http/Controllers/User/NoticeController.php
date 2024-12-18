<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class NoticeController extends Controller
{
    public function userNotice(){
        $notice = DB::table('user_notice')->select('id','title','description',DB::raw("DATE_FORMAT(user_notice.created_at, '%Y-%m-%d') AS created_at"))
        ->orderBy('id','desc')->get();
        return view('user.user_notice', ['notice' => $notice]);
    }


    public function about(){
        return view('user.about');
    }


    public function changePassword(){

        return view('user.change_password');
    }


    public function changepasswordStore(Request $request){
         // Validate the inputs
    $request->validate([
        'password' => 'required|min:8', // Password must be at least 8 characters
        'confirm_password' => 'required|same:password', // Confirm password must match password
    ]);

    // Get the email from session
    $email = Session::get('email');

    if (!$email) {
        return back()->with('error', 'User session expired. Please log in again.');
    }

    // Update the password in the database
    $updated = DB::table('users')
        ->where('email', $email)
        ->update(['password' => Hash::make($request->password)]);

    // Check if the update was successful
    if ($updated) {
        return back()->with('success', 'Password updated successfully.');
    } else {
        return back()->with('error', 'Failed to update the password. Please try again.');
    }
    }
}
