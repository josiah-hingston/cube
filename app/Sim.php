<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sim extends Model
{

    protected $fillable = [
        'sim_no',
        'number',
        'tariff',
        'roaming',
        'dcoo',
        'activated_date'
    ];

    protected $dates = [
        'activated_date'
    ];

	/**
	 * SIM Relationships
	 */

    public function employee()
    {
    	return $this->belongsTo('App\Employee');
    }

    public function apple()
    {
    	return $this->belongsTo('App\Apple', 'apple_id');
    }

    public function android()
    {
    	return $this->belongsTo('App\Android', 'android_id');
    }

}