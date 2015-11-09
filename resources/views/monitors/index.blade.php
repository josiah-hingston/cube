@extends('layouts.app')

@section('content')
	
	@if($monitors->count())

		<div class="panel panel-primary">
		  <div class="panel-heading" style="background-color: #3E3F3A;">
		    <h3 class="panel-title">Monitors <a href="monitor/create" class="btn btn-xs btn-success pull-right"><i class="fa fa-plus"></i> Add</a></h3>
		  </div>
		  <div class="panel-body">

			<table id="myTable" class="table table-bordered table-hover table-striped">
				<thead>
				    <tr>
				        <th>Asset</th>
				        <th>Serial</th>
				        <th>Make</th>
				        <th>Model</th>
				        <th>Issued date</th>
				        <th>Purchased date</th>
				        <th></th>
				    </tr>
				</thead>
				<tbody>
					@foreach($monitors as $monitor)
				        <tr>
				            <td>{{ $monitor->asset }}</td>
				            <td>{{ $monitor->serial }}</td>
				            <td>{{ $monitor->make }}</td>
				            <td>{{ $monitor->model }}</td>
				            <td>{{ $monitor->issued_date }}</td>
				            <td>{{ $monitor->purchase_date }}</td>
				            <td><a href="/monitor/{{ $monitor->id }}">Details</a></td>
				        </tr>
				    @endforeach
				</tbody>
			</table>

			</div>
		</div>

	@else
		<div class="panel panel-primary">
			<div class="panel-body">
				No monitors yet.. <a href="monitor/create">Add one!</a>
			</div>
		</div>
	@endif

@endsection