<?php

namespace App\Http\Controllers\Admin;
use App\Models\Admin\Market;
use App\Models\Admin\Result;
use App\Models\Admin\Game_type;
use App\Models\Withdraw;
use App\Models\DepositRequest;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NavController extends Controller
{
   public function index(){
       return view('admin.login');
   }
   public function dashboard(){

      $user_count = DB::table('users')->count();

      $game_types = DB::table('game_types')->count();

      $withdraw = DB::table('withdraw')->count();

      $deposit_request = DB::table('deposit_request')->count();

    return view('admin.index', ['user_count' => $user_count, 'game_types' => $game_types, 'withdraw' => $withdraw, 'deposit_request' => $deposit_request]);
   }

   public function markets(){
    $data = Market::paginate(10);
    return view('admin.markets',  compact('data'));
   }

   public function game_type(){

      $gameTypeData = Game_type::paginate(10);
    return view('admin.games_type', compact('gameTypeData'));
   }

   public function declare_result(){
      $market = Market::all();
    //   $resultData = Result::paginate(7);
    $resultData = DB::table('results')->select('results.*','markets.name')
    ->join('markets','results.market','=','markets.id')
    ->orderBy('id','desc')->paginate(10);
// dd($resultData);

      return view('admin.declare_result', compact('resultData','market'));

   //  return view('admin.declare_result', compact('resultData'));
   }

   public function open_load(){
    return view('admin.view-open-load');
   }

   public function close_load(){
    return view('admin.view-close-load');
   }

   public function winning_history(){

      $winning_history = DB::table('results')->orderBy('id','desc')->paginate(5);

    return view('admin.winning_history',['winning_history' => $winning_history]);
   }

   public function bid_history(){

      $bidData = DB::table('bid_histories')->orderBy('id','desc')->paginate(5);

    return view('admin.bid_history',['bidData' => $bidData]);
   }

   public function bidHistoryDelete($id){
      $id =decrypt($id);
      DB::table('bid_histories')->where('id',$id)->delete();
      return redirect()->route('bid_history')->with('success','Data deleted successfully!');
   }

   public function withdraw_request(){

    //   $withdrawData = Withdraw::paginate(10);
    $withdrawData = DB::table('withdraw')->orderBy('id','desc')->paginate(10);
    // dd($withdrawData);
    return view('admin.withdraw_req', compact('withdrawData'));
   }

   public function users(){

      $user_data = DB::table('users')->orderBy('id','desc')->paginate(5);

    return view('admin.user', ['user_data' => $user_data]);
   }


   public function userSearch(Request $request){
      $search = $request->searchUser;
      $user_data = User::where('contact', 'LIKE', '%'.$search.'%')->paginate(10);
      return view('admin.user', compact('user_data'));
   }

   public function userDelete($id){
      $id = decrypt($id);
      DB::table('users')->where('id',$id)->delete();
      return redirect()->route('users')->with('success','User deleted successfully!');
   }

   public function editbankBalance($id){
      $id = decrypt($id);
      $balance_data = DB::table('users')->where('id',$id)->first();

      return view('admin.edit_bank_balance', ['balance_data' => $balance_data]);
   }


   public function editbankBalanceStore(Request $request, $id){
      $id = decrypt($id);

      $validate = $request->validate([
         'balance' => 'required'
      ]);

      DB::table('users')->where('id',$id)->update([
         'balance' => $validate['balance']
      ]);

      return redirect()->route('users')->with('success','Balance updated successfully!');
   }

   public function deposit_request(){

    //   $depositData = DepositRequest::paginate(10);
    $depositData = DB::table('deposit_request')->orderBy('id','desc')->get();
       return view('admin.deposit_request', compact('depositData'));

   }

   public function banner(){
    return view('admin.banner');
   }

   public function minimum_limit(){
    return view('admin.Minimum_limit');
   }

   public function notification(){
    return view('admin.notification');
   }

   public function upi(){
    return view('admin.upi');
   }

   public function winning_rate(){
    return view('admin.winning_rates');
   }

   public function contact(){
    return view('admin.contacts');
   }


   public function starlineGames(){
      $games_data = DB::table('starline_games')->orderBy('id','desc')->paginate(5);
      return view('admin.starline_games', ['games_data' => $games_data]);
   }


   public function addStarlineGames(){
      return view('admin.add_starline_games');
   }


   public function starlineGamesStore(Request $request){
      $validate = $request->validate([
        'market_name' => 'required',
         'time' => 'required',
         'open_pana' => 'required',
         'open_result' => 'required',
         'close_pana' => 'required',
         'close_result' => 'required',
         'status' => 'required'
      ]);

      DB::table('starline_games')->insert([
         'name' => $validate['market_name'],
         'time' => $validate['time'],
         'open_pana' => $validate['open_pana'],
         'open_result' => $validate['open_result'],
         'close_pana' => $validate['close_pana'],
         'close_result' => $validate['close_result'],
         'status' => $validate['status']
      ]);

      return redirect()->route('starline_games')->with('success','Data added successfully!');
   }


   public function starlinkGamesDelete($id){
      $id = decrypt($id);

      DB::table('starline_games')->where('id',$id)->delete();
      return redirect()->route('starline_games')->with('success','Data deleted successfully!');

   }


   public function starlineGamesEdit($id){
      $id = decrypt($id);
      $data = DB::table('starline_games')->where('id',$id)->first();
      return view('admin.edit_starline_games', ['data' => $data]);
   }


   public function starlineGamesEditStore(Request $request, $id){
      $id = decrypt($id);

      $validate = $request->validate([
        'market_name' => 'required',
         'time' => 'required',
         'open_pana' => 'required',
         'open_result' => 'required',
         'close_pana' => 'required',
         'close_result' => 'required',
         'status' => 'required'
      ]);

      DB::table('starline_games')->where('id',$id)->update([
        'name' => $validate['market_name'],
         'time' => $validate['time'],
         'open_pana' => $validate['open_pana'],
         'open_result' => $validate['open_result'],
         'close_pana' => $validate['close_pana'],
         'close_result' => $validate['close_result'],
         'status' => $validate['status']
      ]);

      return redirect()->route('starline_games')->with('success','Data updated successfully!');
   }

   public function starlineGameTypes(){

    $gameTypeData = DB::table('starline_game_types')->orderBy('id','desc')->get();
    return view('admin.starline_game_types',['gameTypeData' => $gameTypeData]);
   }

   public function addStarlineGameTypes(){
        return view('admin.add_starline_game_types');
   }

   public function addStarlineGameTypesStore(Request $request){
    $validate = $request->validate([
        'name' => 'required',
        'rate' => 'nullable'
    ]);

    DB::table('starline_game_types')->insert([
        'name' => $validate['name'],
        'rate' => $validate['rate']
    ]);

    return redirect()->route('starline_game_types')->with('success','Game added successfully!');
   }

   public function starlineGameTypesDelete($id){
    $id = decrypt($id);
    DB::table('starline_game_types')->where('id',$id)->delete();
    return redirect()->route('starline_game_types')->with('success','Game deleted successfully.');
   }


   public function gali(){

      $gali_data = DB::table('gali_disawar')->orderBy('id','desc')->paginate(5);

      return view('admin.gali', ['gali_data' => $gali_data]);
   }


   public function addGali(){

      return view('admin.add_gali');
   }


   public function addGaliStore(Request $request){
      $validate = $request->validate([
         'name' => 'required',
         'time' => 'required',
         'result' => 'required',
         'status' => 'required'
      ]);

      DB::table('gali_disawar')->insert([
         'name' => $validate['name'],
         'time' => $validate['time'],
         'result' => $validate['result'],
         'status' => $validate['status']
      ]);

      return redirect()->route('gali')->with('success','Data added successfully!');
   }


   public function galiDelete($id){
      $id = decrypt($id);

      DB::table('gali_disawar')->where('id',$id)->delete();
      return redirect()->route('gali')->with('success','Data deleted successfully!');
   }


   public function galiEdit($id){

      $id = decrypt($id);
      $data = DB::table('gali_disawar')->where('id',$id)->first();
      return view('admin.edit_gali', ['data' => $data]);
   }


   public function galiEditStore(Request $request, $id){
      $id = decrypt($id);

      $validate = $request->validate([
         'name' => 'required',
         'time' => 'required',
         'result' => 'required',
         'status' => 'required'
      ]);

      DB::table('gali_disawar')->where('id',$id)->update([
         'name' => $validate['name'],
         'time' => $validate['time'],
         'result' => $validate['result'],
         'status' => $validate['status']
      ]);

      return redirect()->route('gali')->with('success','Data updated successfully!');
   }


   public function changeWinStatus(Request $request, $id)
   {
       $id = decrypt($id);

       // Fetch the current status
       $data = DB::table('bid_histories')->where('id', $id)->value('win');

       // Toggle the status
       if ($data == '1') {
           DB::table('bid_histories')->where('id', $id)->update(['win' => 0]);
           $win = 0;
       } else {
           DB::table('bid_histories')->where('id', $id)->update(['win' => 1]);
           $win = 1;
       }

       // Return JSON response
       return redirect()->back()->with('success','Success');
   }


}
