<?php

/**
 * This Class is Used to Store the User information
 *
 * @author Zohaib
 */

namespace App\Repositories;

use App\User;
use Illuminate\Support\Facades\Hash;

class UserRepository {

    /**
     * Sign Up New User
     *
     * @param  \Illuminate\Http\Request  $request
     * @return App\User
     */
    public function store($request) {

        $user = New User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->country = $request->country;
        $user->address = $request->address;
        $user->language = 'En';
        $user->instagram = $request->instagram;
        $user->profile_img = $request->profile_img;
        $user->pet = $request->pet;
        $user->pet_img = $request->pet_img;
        $user->country_id = $request->country_id;
        $user->language_id = $request->language_id;
        $user->status = 1;

        if ($request->has('role_id')) {
            $user->role_id = $request->role_id;
        } else {
            $user->role_id = 3;
        }

        $user->password = Hash::make($request->password);

        if ($user->save()) {
            return $user;
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

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->country = $request->country;
        $user->address = $request->address;
        $user->language = 'En';
        $user->instagram = $request->instagram;
        $user->profile_img = $request->profile_img;
        $user->pet = $request->pet;
        $user->pet_img = $request->pet_img;
        $user->country_id = $request->country_id;
        $user->language_id = $request->language_id;
        $user->status = $request->status;

        //Only Admin Can Change Role
        if ($request->has('role_id')) {
            $user->role_id = $request->role_id;
        }


        if ($user->save()) {
            return $user;
        }

        return null;
    }

    /**
     * Facebook Signin and SignUp
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return App\User
     */
    public function OAuthFacebookSignUp($request) {


        $user = New User;

        $user->email = $request->email;
        $user->facebook_id = $request->facebook_id;
        $user->password = Hash::make(str_random(10));
        $user->profile_img = "http://graph.facebook.com/$request->facebook_id/picture?type=large";
        $user->name = $request->name;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->country = $request->country;
        $user->address = $request->address;
        $user->language = 'En';


        $user->country_id = 1;
        $user->language_id = 1;
        $user->status = 1;
        $user->role_id = 3;



        if ($user->save()) {
            return $user;
        }
        return null;
    }

    /**
     * Google Sign in and Signup User
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return App\User
     */
    public function OAuthGoogleSignUp($request) {


        $user = New User;

        $user->email = $request->email;
        $user->google_id = $request->google_id;
        $user->password = Hash::make(str_random(10));
        $user->profile_img = $request->profile_img;
        $user->name = $request->name;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->country = $request->country;
        $user->address = $request->address;
        $user->language = 'En';


        $user->country_id = 1;
        $user->language_id = 1;
        $user->status = 1;
        $user->role_id = 3;



        if ($user->save()) {
            return $user;
        }
        return null;
    }

}
