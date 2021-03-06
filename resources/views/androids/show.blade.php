@extends('layouts.app')

@section('content')

	@if(Session::has('simsuccess'))
    	<div class="alert alert-success">
	        <p>SIM added successfully</p>   
	    </div>
    @endif

	<div class="col-md-6 col-sm-12">

		<div class="list-group">
		  <a href="#" class="list-group-item">
		    <h4 class="list-group-item-heading">IMEI</h4>
		    <p class="list-group-item-text">{{ $android->imei }}</p>
		  </a>
		  <a href="#" class="list-group-item">
		    <h4 class="list-group-item-heading">Make</h4>
		    <p class="list-group-item-text">{{ $android->make }}</p>
		  </a>
		  <a href="#" class="list-group-item">
		    <h4 class="list-group-item-heading">Model</h4>
		    <p class="list-group-item-text">{{ $android->model }}</p>
		  </a>
		  <a href="#" class="list-group-item">
		    <h4 class="list-group-item-heading">Issued date</h4>
		    <p class="list-group-item-text">{{ $android->issued_date }}</p>
		  </a>
		  <a href="#" class="list-group-item">
		    <h4 class="list-group-item-heading">Purchase date</h4>
		    <p class="list-group-item-text">{{ $android->purchase_date }}</p>
		  </a>
		</div>

	</div>

	<div class="col-md-6 col-sm-12">

		<div class="panel panel-primary">
		  <div class="panel-heading" style="background-color: #3E3F3A;">
		    <h3 class="panel-title">SIM card <a href="assign/{{ $android->id }}" class="btn btn-xs btn-success pull-right"><i class="fa fa-plus"></i> Add</a></h3>
		  </div>
		  <div class="panel-body">
	  		@if(count($sim))
			  	<a href="/sim/{{ $sim->id }}"><button class="btn btn-primary" type="button">
				  <span class="badge">{{ $sim->number }}</span> {{ $sim->tariff }}
				</button></a>
			@endif
		  </div>
		</div>

	</div>

@endsection