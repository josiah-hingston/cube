<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docker extends Model
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