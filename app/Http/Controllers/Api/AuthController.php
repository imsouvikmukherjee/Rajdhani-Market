<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signup(Request $request){
        $validateUser = Validator::make(
            $request->all(),
            [
                'name' => ['required'],
                'number' => ['required','unique:users,number'],
                'email' => ['required','unique:users,email'],
                'password' => ['required'],
               
                // 'demop' => ['required'],
            ]
            );

            if($validateUser->fails()){
                return response()->json([
                    'status' => 'false',
                    'error' => 'Validation Error',
                   'message' => $validateUser->errors()->all(),
                ],401);
            } 
            $user = User::create([
                'name' => $request->name,
                'number' => $request->number,
                'email' => $request->email,
                'balance' => $request->balance,
                'password' => $request->password,
                'demop' => $request->password
            ]);
            return response()->json([
                'status' => 'true',
                'error' => 'User created successfully',
               'user' => $user,
            ],200);

    }

    public function login(Request $request){

        $validateUser = Validator::make(
            $request->all(),
            [
                
                'number' => ['required'],
                'password' => ['required'],
            ]
            );
            if($validateUser->fails()){
                return response()->json([
                    'status' => 'false',
                    'error' => 'Authentication failed',
                   'message' => $validateUser->errors()->all(),
                ],404);
            } 

            if (Auth::attempt(['number' => $request->number, 'password' => $request->password])) {
                $user = Auth::user();
                // $token = $user->createToken('authToken')->accessToken;
                $token = $user->createToken('API Token')->plainTextToken;
            
                return response()->json([
                    'status' => 'true',
                    'message' => 'User logged in successfully',
                    'token' => $token,
                    'token_type' => 'bearer'
                ], 200);
            } else {
                return response()->json([
                    'status' => 'false',
                    'error' => 'Authentication failed',
                    'message' => 'Invalid credentials',
                ], 401);
            }
            

    }

    public function logout(Request $request){

        $user = $request->user();
        $user->tokens()->delete();
        return response()->json([
           'status' => 'true',
           'user' => $user,
            'message' => 'User logged out successfully',
           
        ],200);
    }
}
