<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


// use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
   
    public function signup(Request $request){
        $admin = new Admin();
        $admin->username = request('username');

        // Use bcrypt to hash the password before saving it
        $admin->password =  bcrypt(request('password'));

        $admin->save();
    }
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('admin.dashboard'); // Replace 'admin.dashboard' with your admin dashboard route name
        }

        // Authentication failed... 
        return redirect()->route('login')->with(['error' => 'Invalid credentials']); // Redirect back with error message
    }


 

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
