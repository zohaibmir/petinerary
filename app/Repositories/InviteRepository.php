<?php

/**
 * This Class is Used to Store the User information
 *
 * @author Zohaib
 */

namespace App\Repositories;

use App\Invite;
use Illuminate\Support\Facades\Hash;

class InviteAmbassdorRepository {

    /**
     * Sign Up New User
     *
     * @param  \Illuminate\Http\Request  $request
     * @return App\User
     */
    public function store($request) {

        $invite = New Invite();
        $invite->code = str_random(30);
        $invite->email = $request->email;

        if ($invite->save()) {
            return $invite;
        }
        return null;
    }

    /**
     * Update User
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return App\User
     */
    public function update($request, $id) {

        $invite = $invite::find($id);
        $invite->code = $request->code;
        $invite->email = $request->email;

        if ($invite->save()) {
            return $invite;
        }
        return null;
    }

    /**
     * Description: Claim Ambassdor Token
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return App\User
     */
    public function claimToken($id) {
        $invite = $invite::find($id);
        $invite->claimed_at = date('Y-m-d H:i:s');
        if ($invite->save()) {
            return $invite;
        }
        return null;
    }

}
