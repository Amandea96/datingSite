<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\friend;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class friendCtrl extends Controller
{
	
	public function __construct() {
	$friendPair = new friend();
	
}
    
public function deleteFriend($id='') {
	
	$acd=User::find($id);
	
	


		
			
			
		 
		$dontmfriend=DB::table('friend')
            ->where(function ($query) use($id) {
                $query->orwhere([['id_person1','=',Auth::id()],['id_person2','=', $id]])
				
			 ->orWhere([['id_person2', '=', Auth::id()],['id_person1', '=', $id]]);
			 
            })->delete();
	
return redirect()->route('listPerson.show');	
}
public function addFriend($id='') {
		
			if(empty($friend)){

					
					
					
	DB::table('friend')->insert(
    [ "id_person1" => Auth::id(), "id_person2" => $id, "type"=>"friend"]
);
					
	 			
	}
	return redirect()->route('listPerson.show');
	//return redirect()->route('account', ['id' => $id] );	
	}
	/*
	public function myfriendList() {
	$myfriends = DB::table('users')
	
	->leftJoin('friend', function($join){
        $join->on('users.id', '=', 'friend.id_person1');
		$join->orOn('users.id','=','friend.id_person2');})
        ->where('friend.id_person2', '=', Auth::id())
	->orWhere('friend.id_person1', '=', Auth::id())
->paginate(3);
 */
/*public function myfriendList() {
	$myfriends = DB::table('users')
	
	->leftJoin('friend', function($join){
        $join->on('users.id', '=', 'friend.id_person1')
		->select('friend.id_person1', 'type')->where('friend.id_person2', '=', Auth::id());
	})
	
	->leftJoin('friend', function($join){
		$join->on('users.id','=','friend.id_person2')
	->select('friend.id_person2', 'type')->where('friend.id_person1', '=', Auth::id());});*/
	
/*public function myfriendList() {
	$myfriends = DB::table('users')
	
	->leftJoin('friend', function($join){
        $join->on('users.id', '=', 'friend.id_person1')
		->select('friend.id_person1', 'type')
        ->where('friend.id_person2', '=', Auth::id());})
	->leftJoin('friend AS friend2', function($join){
		$join->orOn('users.id','=','friend2.id_person2')
		->select('friend2.id_person2', 'type')
	->where('friend2.id_person1', '=', Auth::id());})
->paginate(3);*/
/*public function myfriendList() {
	$myfriends = DB::table('users')
	
	->leftJoin('friend', function($join){
        $join->on('users.id', '=', 'friend.id_person1');
		$join->orOn('users.id','=','friend.id_person2');})
        ->select('friend.id_person1 AS id', 'type')->where('friend.id_person2', '=', Auth::id())
	->orWhere('friend.id_person1', '=', Auth::id())
->paginate(3);*/

/*public function myfriendList() {
	$myfriends = DB::table('users')

	->leftJoin('friend','users.id','=','friend.id_person1')
	->leftJoin('friend AS fr','users.id','=','fr.id_person2')
	->select([['fr.id_person2', 'fr.type'],['friend.id_person1', 'friend.type']])->where([['fr.id_person1', '=', Auth::id()],['friend.id_person2', '=', Auth::id()]])
	
->paginate(3);*/


	
	
	public function friendList($id='') {
		
	Session::put('iduser', $id);
	$myfriends = DB::table('users')
	
	->leftJoin('friend', function($join){
       
		$join->on('users.id','=','friend.id_person2');
		})
        
	->where('friend.id_person1', '=', $id)->paginate(3);
	
$myfriends2 = DB::table('users')
	
	->leftJoin('friend', function($join){
       
		$join->on('users.id','=','friend.id_person1');
		})
        
	->where('friend.id_person2', '=', $id)->paginate(3);
return view('friendList', compact('myfriends','myfriends2') );	
	}}
