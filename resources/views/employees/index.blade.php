@extends('layouts.app')

@section('content')

	@if($employees->count())

		<div class="panel panel-primary">
		  <div class="panel-heading" style="background-color: #3E3F3A;">
		    <h3 class="panel-title">Employees <a href="employee/create" class="btn btn-xs btn-success pull-right"><i class="fa fa-plus"></i> Add</a></h3>
		  </div>
		  <div class="panel-body">

			<table id="myTable" class="table table-bordered table-hover table-striped">
				<thead>
				    <tr>
				        <th>Surname</th>
				        <th>First Name</th>
				        <th>Job Title</th>
				        <th>Manager</th>
				        <th>Department</th>
				        <th></th>
				    </tr>
				</thead>
				<tbody>
					@foreach($employees as $employee)
				        <tr>
				            <td>{{ $employee->last_name }}</td>
				            <td>{{ $employee->first_name }}</td>
				            <td>{{ $employee->role }}</td>
				            <td>{{ $employee->manager }}</td>
				            <td>{{ $employee->department }}</td>
				            <td><a class="btn btn-xs btn-default btn-block" href="/employee/{{ $employee->id }}">View</a></td>
				        </tr>
				    @endforeach
				</tbody>
			</table>

			</div>
		</div>

	@else
		<div class="panel panel-primary">
			<div class="panel-body">
				No employees yet.. <a href="employee/create">Add one!</a>
			</div>
		</div>
	@endif

@endsection