<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Full_sangam;
use App\Models\Half_sangam;
use Illuminate\Http\Request;

class SangamController extends Controller
{
   
    public function storeHalfSangam(Request $request){


        $halfSangam = new Half_sangam();
        $halfSangam->date = $request->date;
        $halfSangam->session = $request->session;
        $halfSangam->market_name = $request->market_name;
        $halfSangam->game_name = $request->game_name;
        $halfSangam->username = $request->username;
        $halfSangam->contact = $request->contact;
        $halfSangam->email = $request->email;
        $halfSangam->open_digits = $request->open_digits;
        $halfSangam->close_digits = $request->close_digits;
        $halfSangam->open_pana = $request->open_pana;
        $halfSangam->close_pana = $request->close_pana;
           $halfSangam->points = $request->points;
        $halfSangam->save();
        return response()->json([
           
            'status' => 'success',
            'message' => 'Half Sangam added successfully',
            'data' => $halfSangam

        ], 201);



    }
    public function storeFullSangam(Request $request){

        $fullSangam = new Full_sangam();
        $fullSangam->date = $request->date;
        // $fullSangam->session = $request->session;
        $fullSangam->market_name = $request->market_name;
        $fullSangam->game_name = $request->game_name;
        $fullSangam->username = $request->username;
        $fullSangam->contact = $request->contact;
        $fullSangam->email = $request->email;
        $fullSangam->open_pana = $request->open_pana;
        $fullSangam->close_pana = $request->close_pana;
        $fullSangam->points = $request->points;
        $fullSangam->save();
        return response()->json([
           
           'status' => 'success',
           'message' => 'Full Sangam added successfully',
            'data' => $fullSangam

        ], 201);
    }

    public function getHalfSangam()
    {
        $halfSangams = Half_sangam::all();
        return view('admin.halfSangam' , compact('halfSangams'));
    }
    public function deleteHalfSangam($id){
        $id = decrypt($id);
        $halfSangam = Half_sangam::find($id);
        $halfSangam->delete();
        return back()->with('message','Deleted Successfully');
    }
    public function getFullSangam()
    {
        $fullSangams = Full_sangam::all();
        return view('admin.fullSangam' , compact('fullSangams'));
    }
    public function deleteFullSangam($id){
        $id = decrypt($id);
        $fullSangam = Full_sangam::find($id);
        $fullSangam->delete();
        return back()->with('message','Deleted Successfully');
    }
}
