<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    
    protected $fillable = [
		'asset',
		'serial',
		'make',
		'model',
		'issued_date',
		'purchase_date'
	];
	
}
