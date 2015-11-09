@extends('layouts.app')

@section('content')

	@if($apples->count())
		
		<div class="panel panel-primary">
		  <div class="panel-heading" style="background-color: #3E3F3A;">
		    <h3 class="panel-title">Apple devices <a href="apple/create" class="btn btn-xs btn-success pull-right"><i class="fa fa-plus"></i> Add</a></h3>
		  </div>
		  <div class="panel-body">

			<table id="myTable" class="table table-bordered table-hover table-striped">
				<thead>
				    <tr>
				        <th>IMEI</th>
				        <th>Make</th>
				        <th>Model</th>
				        <th>Issued date</th>
				        <th>Purchase date</th>
				        <th></th>
				         @if(Session::has('employee'))
				        	<th></th>
				        @endif
				    </tr>
				</thead>
				<tbody>
					@foreach($apples as $apple)
				        <tr>
				            <td>{{ $apple->imei }}</td>
				            <td>{{ $apple->make }}</td>
				            <td>{{ $apple->model }}</td>
				            <td>{{ $apple->issued_date }}</td>
				            <td>{{ $apple->purchase_date }}</td>
				            <td><a class="btn btn-xs btn-default btn-block" href="/apple/{{ $apple->id }}">Details</a></td>
				            @if(Session::has('employee'))
				            	<td><a class="btn btn-xs btn-default btn-block" href="/apple/assign/{{ $apple->id }}/{{ Session::get('employee')->id }}">Assign</a></td>
				            @endif
				        </tr>
				    @endforeach
				</tbody>
			</table>

			</div>
		</div>

	@else
		<div class="panel panel-primary">
			<div class="panel-body">
				No Apple devices yet.. <a href="apple/create">Add one!</a>
			</div>
		</div>
	@endif

@endsection