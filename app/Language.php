<?php

/**
 * Description of Events
 *
 * @author Zohaib
 */

namespace App;

use App\Base;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Language extends Base {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'languages';

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
    protected $fillable = array('name', 'code');

    /*
     * prevents the listed columns from mass assignment.
     */
    protected $guarded = array('id');

    /*
     *  Validation Rules
     */
    public static $rules = array(
        'name' => 'required'
    );

}
