<?php

use App\Employee;

Route::get('/', function(){

	$starters = Employee::idDescending()->get();

	return view('home', compact('starters'));
	
});

Route::get('home', function(){

	$starters = Employee::idDescending()->get();

	return view('home', compact('starters'));

});

// resource routes...
Route::resource('employee', 'EmployeeController');

Route::resource('apple', 'AppleController');
Route::resource('android', 'AndroidController');
Route::resource('sim', 'SimController');

Route::resource('laptop', 'LaptopController');
Route::resource('desktop', 'DesktopController');

Route::resource('docker', 'DockerController');
Route::resource('monitor', 'MonitorController');

//Assign routes
Route::get('employee/assign/laptop/{id}', 'LaptopController@assign');
Route::get('laptop/assign/{laptop}/{employee}', 'LaptopController@assignLaptop');

Route::get('employee/assign/desktop/{id}', 'DesktopController@assign');
Route::get('desktop/assign/{desktop}/{employee}', 'DesktopController@assignDesktop');

Route::get('employee/assign/apple/{id}', 'AppleController@assign');
Route::get('apple/assign/{apple}/{employee}', 'AppleController@assignApple');

Route::get('employee/assign/android/{id}', 'AndroidController@assign');
Route::get('android/assign/{android}/{employee}', 'AndroidController@assignAndroid');

//Assign SIM routes
Route::get('android/assign/{id}', 'SimController@assignAndroid');
Route::get('sim/android/assign/{sim}/{android}', 'SimController@assignAndroidSim');

Route::get('apple/assign/{id}', 'SimController@assignApple');
Route::get('sim/apple/assign/{sim}/{apple}', 'SimController@assignAppleSim');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');