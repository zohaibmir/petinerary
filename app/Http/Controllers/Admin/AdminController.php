<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Validator;
use App\User;
use App\Repositories\UserRepository;
use App\Invite;
use App\Repositories\InviteRepository;

class AdminController extends Controller {

    public function __construct() {
        //  $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Create a new user Ambassdor invite instance for a valid signUp.
     *
     * @param  array  $request
     * @return Invite
     */
    public function getDashboard() {
        return view('admin.dashboard');
    }

    public function getaddUser() {
        return view('admin.user.register');
    }

    /**
     * Developed By Zohaib
     * Date: 2015-11-23
     * Handle a registration request for the application.
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Repositories\UserRepository
     * @return \Illuminate\Http\Response
     */
    public function postaddUser(Request $request) {
        //$rules = array('email' => 'required|email|unique:users', 'password' => 'required|min:6');

        $rules = User::$rules;
        //  $this->validate($request, $rules);
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {

            return response()->json(array('error' => true, 'mesg' => $validator->messages()->all()), 422);
        }

        $userRepository = new UserRepository();
        //Save New User on Sign up
        $user = $userRepository->store($request);

        if ($user != null) {
            //Auth::login($user);
            return response()->json(array('error' => false, 'user' => $user), 201);
        }

        return response()->json(array('error' => true, 'mesg' => ['Fel uppstod under skapandet av konto']), 422);
    }

    public function getAmbassdorInvite() {
        return view('admin.invites.invite');
    }

    public function postAmbassdorInvite(Request $request) {

        $rules = Invite::$rules;
        //  $this->validate($request, $rules);
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {

            return response()->json(array('error' => true, 'mesg' => $validator->messages()->all()), 422);
        }

        $invite = new InviteRepository();

        $invitation = $invite->store($request);

        return response()->json(array('error' => false, 'invitation' => $invitation), 201);
    }

}
