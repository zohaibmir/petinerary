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
