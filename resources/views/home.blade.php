@extends('layouts.app')

@section('content')

	<div class="row">
		<div class="col-md-3 col-sm-6">
			<div class="panel panel-primary">
			  <div class="panel-heading" style="background-color: #3E3F3A;">
			    <h3 class="panel-title">Employees</h3>
			  </div>
			  <div class="panel-body">
			  	<a href="employee" class="btn btn-block btn-lg btn-info"><i class="fa fa-users fa-5x"></i></a>
			  </div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="panel panel-primary">
			  <div class="panel-heading" style="background-color: #3E3F3A;">
			    <h3 class="panel-title">Apple devices</h3>
			  </div>
			  <div class="panel-body">
			  	<a href="apple" class="btn btn-block btn-lg btn-primary"><i class="fa fa-apple fa-5x"></i></a>
			  </div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="panel panel-primary">
			  <div class="panel-heading" style="background-color: #3E3F3A;">
			    <h3 class="panel-title">Android devices</h3>
			  </div>
			  <div class="panel-body">
			  	<a href="android" class="btn btn-block btn-lg btn-success"><i class="fa fa-android fa-5x"></i></a>
			  </div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="panel panel-primary">
			  <div class="panel-heading" style="background-color: #3E3F3A;">
			    <h3 class="panel-title">SIM cards</h3>
			  </div>
			  <div class="panel-body">
			  	<a href="sim" class="btn btn-block btn-lg btn-danger"><i class="fa fa-credit-card fa-5x"></i></a>
			  </div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-3 col-sm-6">
			<div class="panel panel-primary">
			  <div class="panel-heading" style="background-color: #3E3F3A;">
			    <h3 class="panel-title">Laptops</h3>
			  </div>
			  <div class="panel-body">
			  	<a href="laptop" class="btn btn-block btn-lg btn-warning"><i class="fa fa-laptop fa-5x"></i></a>
			  </div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="panel panel-primary">
			  <div class="panel-heading" style="background-color: #3E3F3A;">
			    <h3 class="panel-title">Desktops</h3>
			  </div>
			  <div class="panel-body">
			  	<a href="desktop" class="btn btn-block btn-lg btn-default"><i class="fa fa-desktop fa-5x"></i></a>
			  </div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="panel panel-primary">
			  <div class="panel-heading" style="background-color: #3E3F3A;">
			    <h3 class="panel-title">Monitors</h3>
			  </div>
			  <div class="panel-body">
			  	<a href="monitor" class="btn btn-block btn-lg btn-primary"><i class="fa fa-tv fa-5x"></i></a>
			  </div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="panel panel-primary">
			  <div class="panel-heading" style="background-color: #3E3F3A;">
			    <h3 class="panel-title">Docking stations</h3>
			  </div>
			  <div class="panel-body">
			  	<a href="docker" class="btn btn-block btn-lg btn-info"><i class="fa fa-gear fa-5x"></i></a>
			  </div>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-12 col-sm-12">

			<div class="panel panel-primary">
			  <div class="panel-heading" style="background-color: #3E3F3A;">
			    <h3 class="panel-title">Employee Quick Find</h3>
			  </div>
			  <div class="panel-body">
				 
				<table id="starterTable" class="table table-bordered table-hover table-striped">
					<thead>
					    <tr>
					        <th>Surname</th>
					        <th>First Name</th>
					        <th>Job Title</th>
					        <th></th>
					    </tr>
					</thead>
					<tbody>
						@foreach($starters as $starter)
					        <tr>
					            <td>{{ $starter->last_name }}</td>
					            <td>{{ $starter->first_name }}</td>
					            <td>{{ $starter->role }}</td>
					            <td><a class="btn btn-xs btn-default btn-block" href="/employee/{{ $starter->id }}">View</a></td>
					        </tr>
					    @endforeach
					</tbody>
				</table>
				  
			  </div>
			</div>

		</div>

	</div>

@endsection