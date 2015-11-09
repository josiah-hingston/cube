@extends('layouts.app')

@section('content')

	<div class="col-md-6 col-sm-12">

		<div class="list-group">
		  <a href="#" class="list-group-item">
		    <h4 class="list-group-item-heading">Asset</h4>
		    <p class="list-group-item-text">{{ $desktop->asset }}</p>
		  </a>
		  <a href="#" class="list-group-item">
		    <h4 class="list-group-item-heading">Serial</h4>
		    <p class="list-group-item-text">{{ $desktop->serial }}</p>
		  </a>
		  <a href="#" class="list-group-item">
		    <h4 class="list-group-item-heading">Make</h4>
		    <p class="list-group-item-text">{{ $desktop->make }}</p>
		  </a>
		  <a href="#" class="list-group-item">
		    <h4 class="list-group-item-heading">Model</h4>
		    <p class="list-group-item-text">{{ $desktop->model }}</p>
		  </a>
		  <a href="#" class="list-group-item">
		    <h4 class="list-group-item-heading">Issued date</h4>
		    <p class="list-group-item-text">{{ $desktop->issued_date }}</p>
		  </a>
		  <a href="#" class="list-group-item">
		    <h4 class="list-group-item-heading">Purchased date</h4>
		    <p class="list-group-item-text">{{ $desktop->purchase_date }}</p>
		  </a>
		</div>

	</div>

	<div class="col-md-6 col-sm-12">

		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">Assigned user</h3>
		  </div>
		  <div class="panel-body">
			  
		  	<a href="/employee/{{ $employee->id }}"><button class="btn btn-primary" type="button">
			  {{ $employee->first_name }} <span class="badge success">{{ $employee->last_name }}</span>
			</button></a>
			  
		  </div>
		</div>

	</div>

@endsection