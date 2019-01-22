<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
class RegisterController extends Controller
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
            'name' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
			'gender' => 'required|string|max:255',
			'prefM' => 'required|string|max:255',
			'age' => 'required|string|max:255',
			'complex' => 'nullable|string|max:255',
			'ecolor' => 'nullable|string|max:255',
			'hcolor' => 'nullable|string|max:255',
			'city' => 'required|string|max:255',
			'prefW' => 'required|string|max:255',
			'nation' => 'required|string|max:255',
			'role' => 'nullable|string|max:255',
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
	 
	 
	 public function showEdit(Request $request,$id=''){
	 
	dd($request->all());
		$userEdit= new PersonEdit();
		$userEdit->$request->input('nick');
		$userEdit->$request->input('age');
		$userEdit->$request->input('prefM');
		$userEdit->$request->input('prefW');
		$userEdit->$request->input('description');
		$userEdit->$request->input('hcolor');
		$userEdit->$request->input('ecolor');
		$userEdit->$request->input('city');
		$userEdit->$request->input('nation');
		$userEdit->$request->input('pass');
		$userEdit->$request->input('nick');
		$userEdit->$request->input('email');
		$userEdit->$request->input('gender');
		$userEdit->$request->input('height');
		$userEdit->$request->input('complex');
		$userEdit->$request->input('image');
		$userEdit->save();
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
	 
	 
	 
   
}
