<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desktop extends Model
{

	protected $fillable = [
		'asset',
		'serial',
		'make',
		'model',
		'issued_date',
		'purchase_date'
	];

	/**
	 * Desktop Relationships
	 */
    
	public function employee()
    {
    	return $this->belongsTo('App\Employee');
    }

}
