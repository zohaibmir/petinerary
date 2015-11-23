<?php

/**
 * Description of Location
 *
 * @author Zohaib
 */

namespace App;

use App\Base;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Location extends Base {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'locations';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array();

    /**
     * To protect against mass assignment
     * 
     */
    protected $fillable = array('country_code', 'country_name');

    /*
     * prevents the listed columns from mass assignment.
     */
    protected $guarded = array('id');

    /*
     *  Validation Rules
     */
    public static $rules = array(
        'country_code' => 'required',
        'country_name' => 'required'
    );

}
