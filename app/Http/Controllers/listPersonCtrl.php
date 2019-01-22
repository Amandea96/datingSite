<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\SearchForm;
use App\friend;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;



class listPersonCtrl extends Controller
{private $user;



public function __construct() {
	$this->user = new User();
}
    public function show(){
		

		
	//$userShow=DB::table('users')->orderBy('id') ['us' => $userShow];
//$userShow=User::all()->toArray();
$userShow=User::paginate(3);
	return view('users', compact('userShow') );
	
	
}


  public function account($id=''){
		

	$ac=User::find($id);
	
	Session::put('iduser', $id);
	

$su=$id;
		
			
			
		 
		$mfriend=DB::table('friend')
            ->where(function ($query) use($su) {
                $query->orwhere([['id_person1','=',Auth::id()],['id_person2','=', $su]])
				
			 ->orWhere([['id_person2', '=', Auth::id()],['id_person1', '=', $su]]);
			 
            })->get();
    
			
			
			$postmsg=DB::table('users')
			->leftJoin('post', function($join){
       
		$join->on('users.id','=','post.id');
		})
           ->where(function ($query) use($su){
                $query->where('post.id', '=', $su);
		  })->get();
		  
		  
return view('account', compact('ac','mfriend','postmsg') );	
	
}


public function search(Request $request){


$searchPerson = $request->all();

$userShow = DB::table('users')
->when(!empty($searchPerson['name']) , function ($query) use($searchPerson){
return $query->where('name', 'LIKE', '%' . $searchPerson['name'] . '%');
})
->when(!empty($searchPerson['gender']) , function ($query) use($searchPerson){
return $query->where('gender', '=' , $searchPerson['gender'] );
})

->when(!empty($searchPerson['prefM']) , function ($query) use($searchPerson){
return $query->where('prefM', '=' , $searchPerson['prefM'] );
})

->when(!empty($searchPerson['prefW']) , function ($query) use($searchPerson){
return $query->where('prefW', '=' , $searchPerson['prefM'] );
})

->when(!empty($searchPerson['complex']) , function ($query) use($searchPerson){
return $query->where('complex', '=' , $searchPerson['complex'] );
})
->when(!empty($searchPerson['ecolor']) , function ($query) use($searchPerson){
return $query->where('ecolor', '=' , $searchPerson['ecolor'] );
})

->when(!empty($searchPerson['hcolor']) , function ($query) use($searchPerson){
return $query->where('hcolor', '=' , $searchPerson['hcolor'] );
})
->when(!empty($searchPerson['city']) , function ($query) use($searchPerson){
return $query->where('city', 'LIKE', '%' . $searchPerson['city'] . '%');
})

->when(!empty($searchPerson['nation']) , function ($query) use($searchPerson){
return $query->where('nation', 'LIKE', '%' . $searchPerson['nation'] . '%');
})
->get()   ;
		
		/*$userShow=DB::table('users')
            ->where(function ($query) use($name,$gender) {
				//['prefM','=',$prefM],['prefW','=',$prefW],['complex','=',$complex],['ecolor','=',$ecolor],['hcolor','=',$hcolor]
                $query
				->whereNotNull('gender','=',$gender)
				->whereNotNull('name', 'LIKE', '%' . $name . '%');
				
			 
			 
			}) ->get();*/
		

    return view('users', compact('userShow'));
}






public function searchFriend(Request $request){


$searchPerson = $request->all();
//$id=Session::get('iduser');

   $id = $request->session()->get('iduser');

$myfriends = DB::table('users')
->leftJoin('friend', function($join){
       
		$join->on('users.id','=','friend.id_person2');
		})
->when(!empty($searchPerson['name']) , function ($query) use($searchPerson, $id){
return $query->where([['name', 'LIKE', '%' . $searchPerson['name'] . '%'], ['friend.id_person1', '=',  $id]]);
})
->when(!empty($searchPerson['gender']) , function ($query) use($searchPerson, $id){
return $query->where([['gender', '=' , $searchPerson['gender']], ['friend.id_person1', '=',  $id]] );
})

->when(!empty($searchPerson['prefM']) , function ($query) use($searchPerson, $id){
return $query->where([['prefM', '=' , $searchPerson['prefM']], ['friend.id_person1', '=', $id]] );
})

->when(!empty($searchPerson['prefW']) , function ($query) use($searchPerson, $id){
return $query->where([['prefW', '=' , $searchPerson['prefM']], ['friend.id_person1', '=',  $id]] );
})

->when(!empty($searchPerson['complex']) , function ($query) use($searchPerson, $id){
return $query->where([['complex', '=' , $searchPerson['complex']], ['friend.id_person1', '=', $id]] );
})
->when(!empty($searchPerson['ecolor']) , function ($query) use($searchPerson, $id){
return $query->where([['ecolor', '=' , $searchPerson['ecolor']], ['friend.id_person1', '=', $id]] );
})

->when(!empty($searchPerson['hcolor']) , function ($query) use($searchPerson, $id){
return $query->where([['hcolor', '=' , $searchPerson['hcolor']], ['friend.id_person1', '=', $id]] );
})
->when(!empty($searchPerson['city']) , function ($query) use($searchPerson, $id){
return $query->where([['city', 'LIKE', '%' . $searchPerson['city'] . '%'], ['friend.id_person1', '=', $id]]);
})

->when(!empty($searchPerson['nation']) , function ($query) use($searchPerson, $id){
return $query->where([['nation', 'LIKE', '%' . $searchPerson['nation'] . '%'], ['friend.id_person1', '=', $id]]);
})
->get()   ;



$myfriends2 = DB::table('users')
	->leftJoin('friend', function($join){
       $join->on('users.id','=','friend.id_person1');
		})
->when(!empty($searchPerson['name']) , function ($query) use($searchPerson, $id){
return $query->where([['name', 'LIKE', '%' . $searchPerson['name'] . '%'], ['friend.id_person2', '=', $id]]);
})
->when(!empty($searchPerson['gender']) , function ($query) use($searchPerson, $id){
return $query->where([['gender', '=' , $searchPerson['gender']], ['friend.id_person2', '=', $id]] );
})

->when(!empty($searchPerson['prefM']) , function ($query) use($searchPerson, $id){
return $query->where([['prefM', '=' , $searchPerson['prefM']], ['friend.id_person2', '=', $id]] );
})

->when(!empty($searchPerson['prefW']) , function ($query) use($searchPerson, $id){
return $query->where([['prefW', '=' , $searchPerson['prefM']], ['friend.id_person2', '=', $id]] );
})

->when(!empty($searchPerson['complex']) , function ($query) use($searchPerson, $id){
return $query->where([['complex', '=' , $searchPerson['complex']], ['friend.id_person2', '=', $id]] );
})
->when(!empty($searchPerson['ecolor']) , function ($query) use($searchPerson, $id){
return $query->where([['ecolor', '=' , $searchPerson['ecolor']], ['friend.id_person2', '=', $id]] );
})

->when(!empty($searchPerson['hcolor']) , function ($query) use($searchPerson, $id){
return $query->where([['hcolor', '=' , $searchPerson['hcolor']], ['friend.id_person2', '=', $id]] );
})
->when(!empty($searchPerson['city']) , function ($query) use($searchPerson, $id){
return $query->where([['city', 'LIKE', '%' . $searchPerson['city'] . '%'], ['friend.id_person2', '=', $id]]);
})

->when(!empty($searchPerson['nation']) , function ($query) use($searchPerson, $id){
return $query->where([['nation', 'LIKE', '%' . $searchPerson['nation'] . '%'], ['friend.id_person2', '=', $id]]);
})
->get()   ;
		
		
		

    return view('friendList', compact('myfriends', 'myfriends2', 'idf'));
}
/*public function search(Request $request){

    $name = $request->input('name');
		
		$userShow=DB::table('users')
            ->where(function ($query) use($name) {
                $query->where('name', 'LIKE', '%' . $name . '%');
				
			 
			 
            })->get();
		

    return view('users', compact('userShow'));
}	*/
/*
    // Search for a user based on their name.
    if ($request->has('name')) {
        $user->where('name', $request->input('name'));
    }

    // Search for a user based on their company.
    if ($request->has('prefM')) {
        $user->where('prefM', $request->input('prefM'));
    }

    // Search for a user based on their city.
    if ($request->has('prefW')) {
        $user->where('prefW', $request->input('prefW'));
    }
	
	if ($request->has('gender')) {
        $user->where('gender', $request->input('gender'));
    }

    // Continue for all of the filters.

    // Get the results and return them.
    return $user->get();*/
	
	
	
	
	 //$userShow = User::query();
/*if(Input::has('name'))
		{
			$userShow->where('name', Input::get('name'));
		}
		if(Input::has('prefM'))
		{
			$userShow->where('prefM', Input::get('prefM'));
		}
		if(Input::has('prefW'))
		{
			$userShow->where('prefW', Input::get('prefW'));
		}*/
		//if(Input::has('gender'))
		//{
			//$userShow->where('gender', Input::get('gender'));
		//}
	
		//return view('users', compact('userShow'));
//return View::make('users',compact('userShow'));
       // }

	public function users(User $userShow)
	{
		//show search results from index form
		
	    return View::make('users', compact('userShow'));
		}


        

	
	
	
	


 public function chatShow(){

	

	
$mchat=DB::table('friend')
            ->where(function ($query) use($id) {
                $query->orwhere([['id_person1','=',Auth::id()],['id_person2','=', $id]])
				
			 ->orWhere([['id_person2', '=', Auth::id()],['id_person1', '=', $id]]);
			 
            })->get();
	
return view('chatView', compact('mchat') );

	
	
}
}