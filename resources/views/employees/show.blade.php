@extends('layouts.app')

@section('content')

	@if(Session::has('laptopsuccess'))
    	<div class="alert alert-success">
	        <p>Laptop added successfully</p>   
	    </div>
    @endif

	<div class="col-md-6 col-sm-12">

		<div class="list-group">
		  <a href="#" class="list-group-item">
		    <h4 class="list-group-item-heading">Surname</h4>
		    <p class="list-group-item-text">{{ $employee->last_name }}</p>
		  </a>
		  <a href="#" class="list-group-item">
		    <h4 class="list-group-item-heading">First name</h4>
		    <p class="list-group-item-text">{{ $employee->first_name }}</p>
		  </a>
		  <a href="#" class="list-group-item">
		    <h4 class="list-group-item-heading">Job Title</h4>
		    <p class="list-group-item-text">{{ $employee->role }}</p>
		  </a>
		  <a href="#" class="list-group-item">
		    <h4 class="list-group-item-heading">Manager</h4>
		    <p class="list-group-item-text">{{ $employee->manager }}</p>
		  </a>
		  <a href="#" class="list-group-item">
		    <h4 class="list-group-item-heading">Department</h4>
		    <p class="list-group-item-text">{{ $employee->department }}</p>
		  </a>
		  <a href="#" class="list-group-item">
		    <h4 class="list-group-item-heading">Email address</h4>
		    <p class="list-group-item-text">{{ $employee->email_address }}</p>
		  </a>
		  <a href="#" class="list-group-item">
		    <h4 class="list-group-item-heading">Employee number</h4>
		    <p class="list-group-item-text">{{ $employee->emp_number }}</p>
		  </a>
		</div>

		<div class="panel panel-primary">
		  <div class="panel-heading" style="background-color: #3E3F3A;">
		    <h3 class="panel-title">Authorisations <a href="assign/auth/{{ $employee->id }}" class="btn btn-xs btn-success pull-right"><i class="fa fa-plus"></i> Add</a></h3>
		  </div>
		  <div class="panel-body">
			 
			  
		  </div>
		</div>

	</div>

	<div class="col-md-6 col-sm-12">

		<div class="panel panel-primary">
		  <div class="panel-heading" style="background-color: #3E3F3A;">
		    <h3 class="panel-title">Laptop <a href="assign/laptop/{{ $employee->id }}" class="btn btn-xs btn-success pull-right"><i class="fa fa-plus"></i> Add</a></h3>
		  </div>
		  <div class="panel-body">
			  @foreach($laptop as $lap)
			  	<a href="/laptop/{{ $lap->id }}"><button class="btn btn-default" type="button">
				  <span class="badge">{{ $lap->make }}</span> {{ $lap->model }}
				</button></a>
			  @endforeach
		  </div>
		</div>

		<div class="panel panel-primary">
		  <div class="panel-heading" style="background-color: #3E3F3A;">
		    <h3 class="panel-title">Desktop <a href="assign/desktop/{{ $employee->id }}" class="btn btn-xs btn-success pull-right"><i class="fa fa-plus"></i> Add</a></h3>
		  </div>
		  <div class="panel-body">
			  @foreach($desktop as $desk)
			  	<a href="/desktop/{{ $desk->id }}"><button class="btn btn-default" type="button">
				  <span class="badge">{{ $desk->make }}</span> {{ $desk->model }}
				</button></a>
			  @endforeach
		  </div>
		</div>

		<div class="panel panel-primary">
		  <div class="panel-heading" style="background-color: #3E3F3A;">
		    <h3 class="panel-title">Apple device <a href="assign/apple/{{ $employee->id }}" class="btn btn-xs btn-success pull-right"><i class="fa fa-plus"></i> Add</a></h3>
		  </div>
		  <div class="panel-body">
			  @foreach($apple as $app)
			  	<a href="/apple/{{ $app->id }}"><button class="btn btn-default" type="button">
				  <span class="badge">{{ $app->make }}</span> {{ $app->model }}
				</button></a>
			  @endforeach
		  </div>
		</div>

		<div class="panel panel-primary">
		  <div class="panel-heading" style="background-color: #3E3F3A;">
		    <h3 class="panel-title">Android device <a href="assign/android/{{ $employee->id }}" class="btn btn-xs btn-success pull-right"><i class="fa fa-plus"></i> Add</a></h3>
		  </div>
		  <div class="panel-body">
			  @foreach($android as $and)
			  	<a href="/android/{{ $and->id }}"><button class="btn btn-default" type="button">
				  <span class="badge">{{ $and->make }}</span> {{ $and->model }}
				</button></a>
			  @endforeach
		  </div>
		</div>

	</div>

@endsection