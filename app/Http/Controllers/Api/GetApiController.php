<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Market;
use App\Models\Admin\Result;
use App\Models\DepositRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class GetApiController extends Controller
{
   public function market(){
    $market = market::all();
    return response()->json($market);
   }

   public function declearResult(){

    $result = result::all();
    return response()->json($result);

   }

   public function deposit(){

      $deposit = depositRequest::all();
      return response()->json($deposit);

   }


   public function forgotPassword(Request $request){
     
      $validate = $request->validate([
         'email' => 'required|email'
      ]);

      $email = $request->input('email');

      $userExists = DB::table('users')->where('email', $email)->exists();

      if (!$userExists) {
       
         return response()->json([
             'success' => false,
             'message' => 'Email not found.'
         ], 404);
     }else{
      
     }
   }

 public function depositAddData(Request $request){
      $validate = $request->validate([
         'username' => 'required',
         'password' => 'required'
      ]);

      $hashedPassword = Hash::make($validate['password']);
    $data =  DB::table('admins')->insert([
         'username' => $validate['username'],
         'password' => $hashedPassword
      ]);

      return response()->json([
         'status' => true,
         'message' => 'admin added successfully',
         'data' => $data
      ]);
   }

   public function galiDisawar(){
      $gali_disawar = DB::table('gali_disawar')->select('id','name','time','result','status')->get();

      return response()->json([
         'success' => true,
         'message' => 'Data fetched successfully!',
         'data' => $gali_disawar
     ], 200);
   }


   public function starlineGames(){
      $starline_games = DB::table('gali_disawar')->select('id','time','result','status')->get();

      return response()->json([
         'success' => true,
         'message' => 'Data fetched successfully!',
         'data' => $starline_games
     ], 200);
   }


   public function rajdhaniUsers(){
      $rajdhani_users = DB::table('users')->select('name','number','email','balance','demop','created_at')->get();
   
      return response()->json([
         'success' => true,
         'message' => 'Data fetched successfully!',
         'data' => $rajdhani_users
      ],200);
   
   }
   
   
    public function updateBalance(Request $request, $number)
   {
      // dd('hello');
       // Validate the incoming request
       $validated = $request->validate([
           'balance' => 'required',
       ]);

       // Update the balance using the 'number' as the identifier
       $updated = DB::table('users')
           ->where('number', $number)
           ->update(['balance' => $validated['balance']]);

       if ($updated) {
           return response()->json(['message' => 'Balance updated successfully'], 200);
       } else {
           return response()->json(['message' => 'User not found or balance not updated'], 404);
       }
   }
}
