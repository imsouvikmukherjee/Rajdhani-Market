<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upi;
class UpiController extends Controller
{
  public function index()
  {
    $upis = Upi::all();
    return view('admin.upi', compact('upis'));
    // return view('admin.upi');
  }

  public function apiIndex()
{
    $upis = Upi::all();

    return response()->json([
        'status' => 'success',
        'message' => 'Data retrieved successfully.',
        'data' => $upis
    ]);
}

  public function edit($id)
  {
    $id = decrypt($id);
    $upi = Upi::find($id);
    return view('admin.add_upi', compact('upi'));
  }

  public function update(Request $request, $id)
  {
    $id = decrypt($id);

    $upi = Upi::find($id);
    $upi->phonepay = $request->phonepay;
    $upi->googlepay = $request->googlepay;
    $upi->paytm = $request->paytm;
    if($request->has('image')){
        $image = $request->file('image');
        $imageName = time(). '.'. $image->getClientOriginalExtension();
        $image->move(public_path('uploads/upi'), $imageName);
        $upi->scanner = 'uploads/upi/'. $imageName;
    }

    $upi->save();
    return redirect()->route('upi')->with('success', 'UPI updated successfully');
  }

}
