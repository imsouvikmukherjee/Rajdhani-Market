<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Market;

use function Psy\debug;

class MarketController extends Controller
{
   public function index(){

   

    return view('admin.add-market');
   }

    public function store(Request $request){

        $request->validate([
            'name' =>'required',
            'url' =>'required',
            'start_time' =>'required',
            'close_time' =>'required',
            'status' =>'required',
            'monday' =>'required',
            'tuesday' =>'required',
            'wednesday' =>'required',
            'thursday' =>'required',
            'friday' =>'required',
           'saturday' =>'required',
           'sunday' =>'required',
        ]);

        $market = new Market();
        $market->name = $request->name;
        $market->result = $request->result;
        $market->url = $request->url;
        $market->start_time = $request->start_time;
        $market->close_time = $request->close_time;
        $market->status = $request->status;
        $market->monday = $request->monday;
        $market->tuesday = $request->tuesday;
        $market->wednesday = $request->wednesday;
        $market->thursday = $request->thursday;
        $market->friday = $request->friday;
        $market->saturday = $request->saturday;
        $market->sunday = $request->sunday;
        $market->save();
        return redirect()->route('markets')->with('success','Market Added Successfully');
    }


    public function view($id){
        $id=decrypt($id);
        $markets = Market::find($id);
        // dd($markets);
        return view('admin.view_market',compact('markets'));
    }


    public function edit($id){
        $id=decrypt($id);
        $markets = Market::find($id);
        // dd($markets);
        return view('admin.edit_market',compact('markets'));


    }

    public function update(Request $request, $id)
    {

        $id = decrypt($id);

        $request->validate([
            'name' => 'required',
            'url' => 'required',
            'start_time' => 'required',
            'close_time' => 'required',
            'status' => 'required',
            'monday' => 'required',
            'tuesday' => 'required',
            'wednesday' => 'required',
            'thursday' => 'required',
            'friday' => 'required',
            'saturday' => 'required',
            'sunday' => 'required',
        ]);

        $market = Market::find($id);
        $market->name = $request->name;
         $market->result = $request->result;
        $market->url = $request->url;
        $market->start_time = $request->start_time;
        $market->close_time = $request->close_time;
        $market->status = $request->status;
        $market->monday = $request->monday;
        $market->tuesday = $request->tuesday;
        $market->wednesday = $request->wednesday;
        $market->thursday = $request->thursday;
        $market->friday = $request->friday;
        $market->saturday = $request->saturday;
        $market->sunday = $request->sunday;
        $market->save();

        return redirect()->route('markets')->with('success', 'Market Updated Successfully');
    }

    public function destroy($id){
        $id = decrypt($id);
        $market = Market::find($id);
        $market->delete();
        return redirect()->route('markets')->with('success', 'Market Deleted Successfully');
    }


    public function status($id){
    
        $id = decrypt($id);
        $market = Market::find($id);
        if($market->status == 1){
            $market->status = 0;
        }else{
            $market->status = 1;
        }
        $market->save();
        return redirect()->route('markets')->with('success', 'Market Status Updated Successfully');

    }
    public function monday($id){
    
        $id = decrypt($id);
        $market = Market::find($id);
        if($market->monday == 1){
            $market->monday = 0;
        }else{
            $market->monday = 1;
        }
        $market->save();
        return redirect()->route('markets')->with('success', 'Market Status Updated Successfully');

    }

    public function tuesday($id){
        $id = decrypt($id);
        $market = Market::find($id);
        if($market->tuesday == 1){
            $market->tuesday = 0;
        }else{
            $market->tuesday = 1;
        }
        $market->save();
        return redirect()->route('markets')->with('success', 'Market Status Updated Successfully');

    
        }

        public function wednesday($id){
            $id = decrypt($id);
            $market = Market::find($id);
            if($market->wednesday == 1){
                $market->wednesday = 0;
            }else{
                $market->wednesday = 1;
            }
            $market->save();
            return redirect()->route('markets')->with('success', 'Market Status Updated Successfully');
        }
        public function thursday($id){
            $id = decrypt($id);
            $market = Market::find($id);
            if($market->thursday == 1){
                $market->thursday = 0;
            }else{
                $market->thursday = 1;
            }
            $market->save();
            return redirect()->route('markets')->with('success', 'Market Status Updated Successfully');
        
            }
            public function friday($id){
                $id = decrypt($id);
                $market = Market::find($id);
                if($market->friday == 1){
                    $market->friday = 0;
                }else{
                    $market->friday = 1;
                }
                $market->save();
                return redirect()->route('markets')->with('success', 'Market Status Updated Successfully');
            }
            public function saturday($id){
                $id = decrypt($id);
                $market = Market::find($id);
                if($market->saturday == 1){
                    $market->saturday = 0;
                }else{
                    $market->saturday = 1;
                }
                $market->save();
                return redirect()->route('markets')->with('success', 'Market Status Updated Successfully');
            
                }
                public function sunday($id){
                    $id = decrypt($id);
                    $market = Market::find($id);
                    if($market->sunday == 1){
                        $market->sunday = 0;
                    }else{
                        $market->sunday = 1;
                    }
                    $market->save();
                    return redirect()->route('markets')->with('success', 'Market Status Updated Successfully');
                }

                public function search(Request $request){
                    $search = $request->search;
                    $data = Market::where('name', 'LIKE', '%'.$search.'%')->paginate(10);
                    return view('admin.markets', compact('data'));
                }
}


