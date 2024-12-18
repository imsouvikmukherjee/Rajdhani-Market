<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Result;
use App\Models\Admin\Market;

use function Psy\debug;

class ResultController extends Controller
{
    public function index() {
        $market = Market::all();

        return view('admin.add-declare', compact('market'));
        // return view('admin.add-declare');
    }

    public function store(Request $request){

        $request->validate([
            'market'=> 'required',
            'date'=> 'required',
            'session'=> 'required',
            // 'open_pana'=> 'required',
            // 'open_result'=> 'required',
            // 'close_pana'=> 'required',
            // 'close_result'=> 'required',
        ]);
    
        // Save data to the declare_result table (Result model)
        $result = new Result();
        $result->market = $request->market;
        $result->date = $request->date;
        $result->session = $request->session;
        // $result->result = $request->result;
        $result->open_pana = $request->open_pana;
        $result->open_result = $request->open_result;
        $result->close_pana = $request->close_pana;
        $result->close_result = $request->close_result;
        $result->save();
    
        // Update the corresponding record in the markets table
        // $market = Market::where('name', $request->market)->first();  // Assuming 'market' is the market id, change it if necessary
        // if ($market) {
        //     $market->result = $request->result;
        //     $market->open_pana = $request->open_pana;
        //     $market->open_result = $request->open_result;
        //     $market->close_pana = $request->close_pana;
        //     $market->close_result = $request->close_result;
        //     $market->save();
        // }
    
        return redirect()->route('declare_result')->with('success', 'Result Added Successfully');
    }
    

    public function view($id){

        $id = decrypt($id);
        $result = Result::find($id);
        return view('admin.view_single_result', compact('result'));
    }

    public function edit($id){
        $id= decrypt($id);
        $result = Result::find($id);
        return view('admin.edit_declare_result', compact('result'));
    }

    public function update(Request $request, $id){

        $id = decrypt($id);
        $request->validate([
            'market'=> 'required',
            'date'=> 'required',
            'session'=> 'required',
          
        ]);
    
        // Update the declare_result table (Result model)
        $result = Result::find($id);
        $result->market = $request->market;
        $result->date = $request->date;
        $result->session = $request->session;
        // $result->result = $request->result;

        $result->open_pana = $request->open_pana;
        $result->open_result = $request->open_result;
        $result->close_pana = $request->close_pana;
        $result->close_result = $request->close_result;
        $result->save();
    
        // Update the corresponding record in the markets table
        // $market = Market::where('name', $request->market)->first();  // Assuming 'market' is the market id, change it if necessary
        // if ($market) {
        //     $result->result = $request->result;
        //     // $market->open_pana = $request->open_pana;
        //     // $market->open_result = $request->open_result;
        //     // $market->close_pana = $request->close_pana;
        //     // $market->close_result = $request->close_result;
        //     $market->save();
        // }
    
        return redirect()->route('declare_result')->with('success', 'Result Updated Successfully');
    }
    

    public function delete($id){
        $id = decrypt($id);
        Result::find($id)->delete();
        return redirect()->route('declare_result')->with('success', 'Result Deleted Successfully');
    }

    public function search(Request $request){
        $query = $request->input('search');
        $resultData = Result::where('market', 'LIKE', '%'.$query.'%')->paginate(5);
        return view('admin.declare_result', compact('resultData'));
    }
}
