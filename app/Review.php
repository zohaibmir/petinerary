<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Invite
 *
 * @author Zohaib
 */

namespace App;

use App\Base;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Review extends Base {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'reviews';

    /**
     * Properties that can be mass assigned
     *
     * @var array
     */
    protected $fillable = array('name', 'street', 'number', 'neighborhood', 'city', 'state', 'country', 'address', 'phone', 'email', 'opening_days', 'opening_time', 'logo', 'facebook', 'instagram', 'rating_quality', 'rating_budget', 'pet_review', 'status', 'category_id', 'rule_conditions');

    /*
     * prevents the listed columns from mass assignment.
     */
    protected $guarded = array('id');

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['id'];

  

}
