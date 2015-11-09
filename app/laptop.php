<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laptop extends Model
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
	 * Laptop Relationships
	 */

	public function employee()
    {
    	return $this->belongsTo('App\Employee');
    }

}