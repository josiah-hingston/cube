<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{

	/**
	 * Checklist Relationships
	 */

	public function employee()
    {
    	return $this->belongsToMany('App\Employee');
    }

    public function laptop()
    {
    	return $this->belongsToMany('App\Laptop');
    }

    public function desktop()
    {
    	return $this->belongsToMany('App\Desktop');
    }

    public function apple()
    {
    	return $this->belongsToMany('App\Apple');
    }

    public function android()
    {
    	return $this->belongsToMany('App\Android');
    }

}
