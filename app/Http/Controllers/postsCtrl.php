<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\friend;
use App\msg;
use App\post;
use Carbon\Carbon;

class postsCtrl extends Controller
{
	
	
	public function chatShow($id='') {
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
return view('chatView', compact('myfriends','myfriends2') );


	
	
	}
	
	public function chatting($id='') {
	/*$myfriends = DB::table('users')
	
	->leftJoin('friend', function($join){
       
		$join->on('users.id','=','friend.id_person2');
		})
        
	->where('friend.id_person1', '=', $id)->paginate(3);
	
$myfriends2 = DB::table('users')
	
	->leftJoin('friend', function($join){
       
		$join->on('users.id','=','friend.id_person1');
		})
        
	->where('friend.id_person2', '=', $id)->paginate(3);*/
	$idreceiver=$id;
	$chat=DB::table('users')
	->leftJoin('msg', function($join){
       
		$join->on('users.id','=','sender');
		})
        
	 ->where(function ($query) use($id) {
                $query->orwhere([['sender','=',Auth::id()],['receiver', '=', $id]])
				
			 ->orWhere([['sender', '=', $id],['receiver', '=', Auth::id()]]);
			 
            })->get();
	
//return view('chatView', compact('myfriends','myfriends2', 'chat') );

return view('chatView', compact( 'chat', 'idreceiver') );
	
	
	}
public function sendmsg($id='', Request $req) {
$idreceiver=$id;	
$chat=DB::table('users')
	->leftJoin('msg', function($join){
       
		$join->on('users.id','=','sender');
		})
        
	 ->where(function ($query) use($id) {
                $query->orwhere([['sender','=',Auth::id()],['receiver', '=', $id]])
				
			 ->orWhere([['sender', '=', $id],['receiver', '=', Auth::id()]]);
			 
            })->get();
$msg=new msg();
$msg->message=$req->input('message');
$msg->sender=Auth::id();
$msg->receiver=$id;
$msg->date_msg=  Carbon::now()->toDateTimeString();

$msg->save();
//return view('chatView', compact('chat','idreceiver') );
return redirect()->route('chatting',['id'=>$id]);
//return redirect()->route('sendMsg', ['id' => $id]);
}	


public function sendpost(Request $req) {
//$ac=User::find(Auth::id());	
$ac=DB::table('users')
->leftJoin('post', 'users.id', '=', 'post.id')
  ->where('users.id','=',Auth::id())
 ->get();
$postmsg=new post();
$postmsg->title=$req->input('title');
$postmsg->text=$req->input('text');
$postmsg->id=Auth::id();

$postmsg->date_desc=  Carbon::now()->toDateTimeString();

$postmsg->save();
//return view('account', compact('postmsg','ac') );
return redirect()->route('account',['id'=>Auth::id()]);
	
}
}