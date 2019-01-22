<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
class personEditCtrl extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/personEdit';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

	
	
	
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'nullable|string|max:255|unique:users',
           'email' => 'nullable|string|email|max:255|unique:users',
            'password' => 'nullable|string|min:6|confirmed',
			'gender' => 'required|string|max:255',
			'prefM' => 'required|string|max:255',
			'age' => 'required|string|max:255',
			'complex' => 'nullable|string|max:255',
			'ecolor' => 'nullable|string|max:255',
			'hcolor' => 'nullable|string|max:255',
			'city' => 'required|string|max:255',
			'prefW' => 'required|string|max:255',
			'nation' => 'required|string|max:255',
			//'role' => 'nullable|string|max:255',
			'height' => 'nullable|integer|between:110,230',
			'image' => 'nullable|max:10000',
			'description' => 'nullable|max:10000',
			
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
	 
	 
	 public function edit(Request $request,$id=''){
	 //User::create($request->all());
	//dd($request->all());
		//$userEdit= new PersonEdit();
		
		$userEdit = User::find($id);
		//$userEdit->name=$request->input('name');
		$userEdit->age=$request->input('age');
		$userEdit->prefM=$request->input('prefM');
		$userEdit->prefW=$request->input('prefW');
		$userEdit->description=$request->input('description');
		$userEdit->hcolor=$request->input('hcolor');
		$userEdit->ecolor=$request->input('ecolor');
		$userEdit->city=$request->input('city');
		$userEdit->nation=$request->input('nation');
		//$userEdit->password=$request->input('pass');
		
		//$userEdit->email=$request->input('email');
		$userEdit->gender=$request->input('gender');
		$userEdit->height=$request->input('height');
		$userEdit->complex=$request->input('complex');
		$userEdit->image=$request->input('image');
		$userEdit->save();
	 return redirect()->route('account', ['id' => $id]);
	 }
	 //$selectid = DB::table('users')->where('id', $id)->first();
/*$edPerson=User::find($id);
$edPerson->name=	
$edPerson->gender=	
$edPerson->prefM=	
$edPerson->prefW=	
$edPerson->complex=	
$edPerson->ecolor=	
$edPerson->city=
$edPerson->nation=
$edPerson->height=
$edPerson->image=	
$edPerson->description=	
$edPerson->email=	
$edPerson->age=	
		
	
	*/
	 
	 
	public function showEdit($id=''){
		$aced=User::find($id)->toArray();
		return view('edit',compact('aced'));
	} 
   
}
