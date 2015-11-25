<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Validator;
use App\User;
use App\Repositories\UserRepository;

class AmbassdorController extends Controller {

   
    public function __construct() {
        //  $this->middleware('guest', ['except' => 'getLogout']);
    }

  

}
