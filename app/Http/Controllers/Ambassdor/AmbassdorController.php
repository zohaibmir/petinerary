<?php

namespace App\Http\Controllers\Ambassdor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Validator;
use App\User;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Session;

class AmbassdorController extends Controller {

    public function __construct() {
        //  $this->middleware('guest', ['except' => 'getLogout']);
    }

    public function getDashboard() {
        return view('ambassdor.dashboard');
    }

    public function getuserAuthenticate() {

        return view('ambassdor.login.login');
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
        if (Auth::attempt(array('email' => $request->input('email'), 'password' => $request->input('password'), 'status' => 1, 'role_id' => 2))) {
            Session::put('email', Auth::user()->email);
            Session::put('user_id', Auth::user()->id);
            return redirect()->intended('ambassadors/dashboard');
        }

        return back()->withInput()->withErrors(['Username or Password is Incorrect.']);
    }

    public function getregisterUser($code) {
        if ($code == null) {
            App::abort(404);
        }
        return view('ambassdor.signup.register', array('token' => $code));
    }

    /**
     * Developed By Zohaib
     * Date: 2015-11-23
     * Handle a registration request for the application.
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Repositories\UserRepository
     * @return \Illuminate\Http\Response
     */
    public function postregisterUser(Request $request) {
        //$rules = array('email' => 'required|email|unique:users', 'password' => 'required|min:6');

        $rules = User::$rules;
        //  $this->validate($request, $rules);
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {

            return response()->json(array('error' => true, 'mesg' => $validator->messages()->all()), 422);
        }


        //Validate Token
        if (\App\Invite::where('code', '=', $request->token)->email('email', '=', $request->email)->whereNull('claimed_at')->count() >= 0) {
            $invite = \App\Invite::where('code', '=', $request->token)->email('email', '=', $request->email)->first();
            $invite->claimed_at = date('Y-m-d H:i:s');
        } else {
            return back()->withInput()->withErrors(['This Email is not authorized for signup.']);
        }

        $userRepository = new UserRepository();
        //Save New User on Sign up
        $user = $userRepository->store($request);

        if ($user != null) {

            Auth::login($user);
            if (Auth::check()) {
                Session::put('email', Auth::user()->email);
                Session::put('user_id', Auth::user()->id);
                return redirect()->intended('ambassdor.dashboard');
            }

            return response()->json(array('error' => false, 'user' => $user), 201);
        }

        return response()->json(array('error' => true, 'mesg' => ['Fel uppstod under skapandet av konto']), 422);
    }

    public function getLogout() {
        Auth::logout();
        Session::flush();
        return redirect()->intended('ambassadors/login');
    }

}
