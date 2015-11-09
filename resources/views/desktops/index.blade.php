@extends('layouts.app')

@section('content')
	
	@if($desktops->count())
		<div class="panel panel-primary">
		  <div class="panel-heading" style="background-color: #3E3F3A;">
		    <h3 class="panel-title">Desktops <a href="desktop/create" class="btn btn-xs btn-success pull-right"><i class="fa fa-plus"></i> Add</a></h3>
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
					@foreach($desktops as $desktop)
				        <tr>
				            <td>{{ $desktop->asset }}</td>
				            <td>{{ $desktop->serial }}</td>
				            <td>{{ $desktop->make }}</td>
				            <td>{{ $desktop->model }}</td>
				            <td>{{ $desktop->issued_date }}</td>
				            <td>{{ $desktop->purchase_date }}</td>
				            <td><a class="btn btn-xs btn-default btn-block" href="/desktop/{{ $desktop->id }}">View</a></td>
				            @if(Session::has('employee'))
				            	<td><a class="btn btn-xs btn-default btn-block" href="/desktop/assign/{{ $desktop->id }}/{{ Session::get('employee')->id }}">Assign</a></td>
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
				No desktops yet.. <a href="desktop/create">Add one!</a>
			</div>
		</div>
	@endif

@endsection