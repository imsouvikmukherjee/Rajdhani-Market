<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class NoticeController extends Controller
{
    public function notice(){
        $notice = DB::table('user_notice')->select('id','title','description',DB::raw("DATE_FORMAT(user_notice.created_at, '%Y-%m-%d') AS created_at"))
        ->orderBy('id','desc')->get();
        return view('admin.user_notice', ['notice' => $notice]);
    }

    public function addNotice(){
        return view('admin.add-notice');
    }

    public function addNoticeStore(Request $request){
        // dd($request->all());
        $validate = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $currentDate = Carbon::now()->format('Y-m-d');

        DB::table('user_notice')->insert([
            'title' => $validate['title'],
            'description' => $validate['description'],
            'created_at' => $currentDate
        ]);

        return redirect()->route('notice')->with('success','Notice added successfully.');
    }

    public function noticeDelete($id){
        $id = decrypt($id);

        DB::table('user_notice')->where('id',$id)->delete();
        return redirect()->route('notice')->with('success','Notice deleted successfully.');
    }


    public function numberUpdate($id){
        $data = DB::table('number_details')->where('id',$id)->first();

        return view('admin.numbder_details',['data' => $data]);
    }

    public function numberUpdateStore(Request $request, $id){
        $validate = $request->validate([
            'contact' => 'required|digits:10',
            'whatsapp' => 'required|digits:10'
        ]);

        DB::table('number_details')->where('id',$id)->update([
            'contact' => $validate['contact'],
            'whatsapp' => $validate['whatsapp']
        ]);

        return redirect()->back()->with('success','Numbers updated successfully.');
    }

    public function qrUpdate(){
        $data = DB::table('qr_code')->where('id',2)->first();
        return view('admin.update-qr', ['data' => $data]);
    }


    public function qrstore(Request $request){
       // Validate the request
      $validate = $request->validate([
        'qr_code' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Ensure it's an image
        'upi_id' => 'required',
        'upi_number' => 'required'
    ]);

    if($request->hasfile('qr_code')){


            $img = DB::table('qr_code')->where('id',2)->value('qr');

            if ($request->hasFile('qr_code')) {
                File::delete(public_path('user-asset').'/'.$img);
            }
        }

        $qr_code = time().'.'.$request->qr_code->extension();
        $request->qr_code->move(public_path('user-asset'),$qr_code);

        DB::table('qr_code')->where('id',2)->update([

            'qr' => isset($qr_code) ? $qr_code : $img,
            'upi_id' => $validate['upi_id'],
            'upi_number' => $validate['upi_number'],

        ]);

    return back()->with('success', 'QR code uploaded and saved successfully!');
    }
}
