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

class Category extends Base {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * Properties that can be mass assigned
     *
     * @var array
     */
    protected $fillable = array('name', 'description', 'cat_img');

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
