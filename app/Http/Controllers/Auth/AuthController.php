<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Registration & Login Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users, as well as the
      | authentication of existing users. By default, this controller uses
      | a simple trait to add these behaviors. Why don't you explore it?
      |
     */

use AuthenticatesAndRegistersUsers,
    ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct() {
      //  $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {
        return Validator::make($data, [
                    'name' => 'required|max:255',
                    'email' => 'required|email|max:255|unique:users',
                    'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data) {
        return User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
        ]);
    }

    
    
    public function getuserAuthenticate() {
        
          return view('admin.login.login');
    }
    /**
     * Developed By Zohaib
     * Date: 2015-11-20
     * Desc: This function is used to validate the user account.
     * @param  \Illuminate\Http\Request  $request      
     * @return \Illuminate\Http\Response
     */
    public function postuserAuthenticate(Request $request) {

        // Validation Rules for Login
        $rules = array('email' => 'required|email', 'password' => 'required|min:6');
        // $this->validate($request, $rules);
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
             return $validator->errors()->all();

            //return response()->json(array('error' => true, 'mesg' => $validator->messages()->all()), 422);
        }

        // Check User Login
        if (Auth::attempt(array('email' => $request->input('email'), 'password' => $request->input('password'), 'status' => 1))) {
            $user = Auth::user();
            //return response()->json(array('error' => false, 'user' => $user), 200);
        }
        
         return redirect()->intended('dashboard');

        //Send Error Message in case of wrong credentials
        //return response()->json(array('error' => true, 'mesg' => ['Vänligen kontrollera dina uppgifter!']), 422);
    }

}
