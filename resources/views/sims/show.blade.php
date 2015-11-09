@extends('layouts.app')

@section('content')

	<div class="col-md-6 col-sm-12">

		<div class="list-group">
		  <a href="#" class="list-group-item">
		    <h4 class="list-group-item-heading">SIM number</h4>
		    <p class="list-group-item-text">{{ $sim->sim_no }}</p>
		  </a>
		  <a href="#" class="list-group-item">
		    <h4 class="list-group-item-heading">Number</h4>
		    <p class="list-group-item-text">{{ $sim->number }}</p>
		  </a>
		  <a href="#" class="list-group-item">
		    <h4 class="list-group-item-heading">Tariff</h4>
		    <p class="list-group-item-text">{{ $sim->tariff }}</p>
		  </a>
		  <a href="#" class="list-group-item">
		    <h4 class="list-group-item-heading">Roaming</h4>
		    <p class="list-group-item-text">{{ $sim->roaming }}</p>
		  </a>
		  <a href="#" class="list-group-item">
		    <h4 class="list-group-item-heading">Data opt out</h4>
		    <p class="list-group-item-text">{{ $sim->dcoo }}</p>
		  </a>
		  <a href="#" class="list-group-item">
		    <h4 class="list-group-item-heading">Activated date</h4>
		    <p class="list-group-item-text">{{ $sim->activated_date }}</p>
		  </a>
		</div>

	</div>

	<div class="col-md-6 col-sm-12">

		@if(count($apple))
			<div class="panel panel-primary">
			  <div class="panel-heading" style="background-color: #3E3F3A;">
			    <h3 class="panel-title">Device</h3>
			  </div>
			  <div class="panel-body">
			  	<a href="/apple/{{ $apple->id }}"><button class="btn btn-primary" type="button">
				  {{ $apple->make }} <span class="badge success">{{ $apple->model }}</span>
				</button></a>
			  </div>
			</div>
		@endif 

		@if(count($android))
			<div class="panel panel-primary">
			  <div class="panel-heading" style="background-color: #3E3F3A;">
			    <h3 class="panel-title">Device</h3>
			  </div>
			  <div class="panel-body">
			  	<a href="/android/{{ $android->id }}"><button class="btn btn-primary" type="button">
				  {{ $android->make }} <span class="badge success">{{ $android->model }}</span>
				</button></a>
			  </div>
			</div>
		@endif

		@if(count($employee))
			<div class="panel panel-primary">
			  <div class="panel-heading" style="background-color: #3E3F3A;">
			    <h3 class="panel-title">Employee</h3>
			  </div>
			  <div class="panel-body">	
			  	<a href="/employee/{{ $employee->id }}"><button class="btn btn-primary" type="button">
				  <span class="badge">{{ $employee->first_name }}</span> {{ $employee->last_name }}
				</button></a>
			  </div>
			</div>
		@endif 

	</div>
	
@endsection