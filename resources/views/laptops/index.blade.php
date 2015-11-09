@extends('layouts.app')

@section('content')

	@if($laptops->count())

		<div class="panel panel-primary">
		  <div class="panel-heading" style="background-color: #3E3F3A;">
		    <h3 class="panel-title">Laptops <a href="laptop/create" class="btn btn-xs btn-success pull-right"><i class="fa fa-plus"></i> Add</a></h3>
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
				        @if(Session::has('employee'))
				        	<th></th>
				        @endif
				    </tr>
				</thead>
				<tbody>
					@foreach($laptops as $laptop)
				        <tr>
				            <td>{{ $laptop->asset }}</td>
				            <td>{{ $laptop->serial }}</td>
				            <td>{{ $laptop->make }}</td>
				            <td>{{ $laptop->model }}</td>
				            <td>{{ $laptop->issued_date }}</td>
				            <td>{{ $laptop->purchase_date }}</td>
				            <td><a class="btn btn-xs btn-default btn-block" href="/laptop/{{ $laptop->id }}">Details</a></td>
				            @if(Session::has('employee'))
				            	<td><a class="btn btn-xs btn-default btn-block" href="/laptop/assign/{{ $laptop->id }}/{{ Session::get('employee')->id }}">Assign</a></td>
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
				No laptops yet.. <a href="laptop/create">Add one!</a>
			</div>
		</div>
	@endif

@endsection