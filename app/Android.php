<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Android extends Model
{
    
    protected $fillable = [
        'imei',
        'make',
        'model',
        'purchase_date',
        'issued_date'
    ];

    protected $dates = [
        'purchase_date',
        'issued_date'
    ];

	/**
	 * Android Relationships
	 */

    public function employee()
    {
    	return $this->belongsTo('App\Employee');
    }

    public function sim()
    {
    	return $this->hasOne('App\Sim', 'android_id');
    }

}