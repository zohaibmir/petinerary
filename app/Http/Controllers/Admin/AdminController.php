<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Validator;
use App\User;
use App\Repositories\UserRepository;
use App\Invite;
use App\Repositories\InviteAmbassdorRepository;

class AdminController extends Controller {

    public function __construct() {
        //  $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Create a new user Ambassdor invite instance for a valid signUp.
     *
     * @param  array  $data
     * @return User
     */
    
    public function getAmbassdorInvite($request) {
         return view('admin.invites.invite');
    }
    
    public function postAmbassdorInvite($request) {
        
        $rules = Invite::$rules;
        //  $this->validate($request, $rules);
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {

            return response()->json(array('error' => true, 'mesg' => $validator->messages()->all()), 422);
        }
        
        $invite = new InviteAmbassdorRepository();
        
        $invitation = $invite->store($request);
        
        return response()->json(array('error' => false, 'invitation' => $invitation), 201);
    }

}
