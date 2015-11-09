@extends('layouts.app')

@section('content')

	<div class="panel panel-primary">
	  <div class="panel-heading" style="background-color: #3E3F3A;">
	    <h3 class="panel-title">create employee</h3>
	  </div>
	  <div class="panel-body">

	  @include('partials.errors')

		<form method="POST" action="/employee">
		    {!! csrf_field() !!}

		    <div class="form-group">
				<label for="first_name">First name</label>
				<input type="text" class="form-control" placeholder="First name" name="first_name">
			</div>

			<div class="form-group">
				<label for="last_name">Surname</label>
				<input type="text" class="form-control" placeholder="Surname" name="last_name">
			</div>

			<div class="form-group">
				<label for="role">Job title</label>
				<input type="text" class="form-control" placeholder="Job title" name="role">
			</div>

			<div class="form-group">
				<label for="manager">Manager</label>
				<input type="text" class="form-control" placeholder="Manager" name="manager">
			</div>

			<div class="form-group">
				<label for="department">Department</label>
				<input type="text" class="form-control" placeholder="Department" name="department">
			</div>

			<div class="form-group">
				<label for="email_address">Email address</label>
				<input type="text" class="form-control" placeholder="Email address" name="email_address">
			</div>

			<div class="form-group">
				<label for="emp_number">Employee number</label>
				<input type="text" class="form-control" placeholder="Employee number" name="emp_number">
			</div>

		    <div>
		        <button class="btn btn-default" type="submit">Add</button>
		    </div>
		</form>

		</div>
	</div>
	
@endsection