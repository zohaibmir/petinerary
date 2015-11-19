<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract {

    use Authenticatable,
        Authorizable,
        CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /*
     * prevents the listed columns from mass assignment.
     */
    protected $guarded = array('id', 'password');

    /**
     * What fields we encript in db
     */
    //protected $encrypt = array('user_name', 'first_name', 'last_name', 'email', 'phone', 'address', 'zip', 'city', 'zip', 'region', 'country', 'status', 'is_active', 'visible', 'parent_id', 'relation_description', 'relation_status', 'relation_hide', 'password', 'secret', 'created_at', 'updated_at');

    public static $rules = array(
        'email' => 'required|email|unique:users',
        'password' => 'required'
    );

}
