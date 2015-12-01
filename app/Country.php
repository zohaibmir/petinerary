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

class Country extends Base {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'country';

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
    protected $fillable = array('Code', 'Name', 'Continent', 'Region', 'LocalName');

    /*
     * prevents the listed columns from mass assignment.
     */
    protected $guarded = array('id');

    /*
     *  Validation Rules
     */
    public static $rules = array(
        'Name' => 'required',
        'Continent' => 'required'
    );

}
