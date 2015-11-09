<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

	protected $fillable = [
		'first_name',
		'last_name',
		'role',
		'department',
		'manager',
		'email_address',
        'aduser',
		'emp_number'
	];

	/**
	 * Employee Relationships
	 */

    public function laptop()
    {
    	return $this->hasMany('App\Laptop');
    }

    public function desktop()
    {
    	return $this->hasmany('App\Desktop');
    }

    public function apple()
    {
    	return $this->hasMany('App\Apple');
    }

    public function android()
    {
    	return $this->hasMany('App\Android');
    }

    public function sim()
    {
    	return $this->hasMany('App\Sim');
    }

    public function auth()
    {
    	return $this->hasMany('App\Auth');
    }

    public static function scopeIdDescending($query)
    {
        return $query->limit(10)
                     ->orderBy('id','DESC');
    }   

}