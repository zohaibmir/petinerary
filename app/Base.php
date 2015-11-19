<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Base extends Model {

    public $timestamps = true;

    /**
     * Add input data to object
     * 
     * @return Object
     * @author Andreas Svitzer
     */
    public function inputData() {
        foreach (Input::all() as $key => $value) {
            if (substr($key, 0, 1) != '_') {
                $this->$key = $value;
            }
        }
        return $this;
    }

    /**
     * Add old input data to object
     * 
     * @return Object
     * @author Andreas Svitzer
     */
    public function inputOldData() {
        foreach (Input::old() as $key => $value) {
            $this->$key = $value;
        }
        return $this;
    }

    /**
     * Validate input with object rules
     * 
     * @param array $rules Use custom rules
     * @author Andreas Svitzer
     */
    public function validate($rules = false) {
        if (!$rules)
            $rules = $this->rules;
        return Validator::make(Input::all(), $rules);
    }

}
