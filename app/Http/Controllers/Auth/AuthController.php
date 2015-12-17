<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Validator;
use App\User;
use App\Repositories\UserRepository;

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

//use AuthenticatesAndRegistersUsers,    ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct() {
        //  $this->middleware('guest', ['except' => 'getLogout']);
    }



   

    public function getuserAuthenticate() {

        return view('admin.login.login');
    }

    /**
     * Developed By Zohaib
     * Date: 2015-11-23
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
            return back()->withInput()->withErrors($validator);
        }

        // Check User Login
        if (Auth::attempt(array('email' => $request->input('email'), 'password' => $request->input('password'), 'status' => 1))) {
            $user = Auth::user();
            return redirect()->intended('admin/dashboard');
        }

        return back()->withInput()->withErrors(['Username or Password is Incorrect.']);
    }

   

    public function getLogout() {
        Auth::logout();
        Session::flush();
         return redirect()->intended('admin/login');
    }

}
