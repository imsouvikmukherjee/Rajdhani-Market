<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Game_type;
class Game_type_controller extends Controller
{
    public function index(){
       
     
        return view('admin.add_game_type');
    }
    public function store(Request $request){

        $request->validate([
            'name' =>'required',
            'rate' =>'required'
        ]);

        $game_type = new Game_type();
        $game_type->name = $request->name;
        $game_type->rate = $request->rate;
        $game_type->save();
        
        return redirect()->route('games_type')->with('message','Game Type Added Successfully');
    
}

    public function edit($id){
        $id = decrypt($id);
        $game_type = Game_type::find($id);
        return view('admin.edit_game_type',compact('game_type'));
    }
    public function update(Request $request, $id){
        $id = decrypt($id);
        $request->validate([
            'name' =>'required',
            'rate' =>'required'
        ]);

        $game_type = Game_type::find($id);
        $game_type->name = $request->name;
        $game_type->rate = $request->rate;
        $game_type->save();
        
        return redirect()->route('games_type')->with('message','Game Type Updated Successfully');
    }

    public function delete($id){
        $id = decrypt($id);
        $game_type = Game_type::find($id);
        $game_type->delete();
        
        return redirect()->route('games_type')->with('message','Game Type Deleted Successfully');
    }

    public function search(Request $request){
        $search = $request->search;
        $gameTypeData = Game_type::where('name', 'LIKE', '%'.$search.'%')->paginate(10);
        return view('admin.games_type', compact('gameTypeData'));
    }

}