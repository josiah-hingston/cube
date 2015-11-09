@extends('layouts.app')

@section('content')

	@if($androids->count())
		<div class="panel panel-primary">
		  <div class="panel-heading" style="background-color: #3E3F3A;">
		    <h3 class="panel-title">Android devices <a href="android/create" class="btn btn-xs btn-success pull-right"><i class="fa fa-plus"></i> Add</a></h3>
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
					@foreach($androids as $android)
				        <tr>
				            <td>{{ $android->imei }}</td>
				            <td>{{ $android->make }}</td>
				            <td>{{ $android->model }}</td>
				            <td>{{ $android->issued_date }}</td>
				            <td>{{ $android->purchase_date }}</td>
				            <td><a class="btn btn-xs btn-default btn-block" href="/android/{{ $android->id }}">Details</a></td>
				            @if(Session::has('employee'))
				            	<td><a class="btn btn-xs btn-default btn-block" href="/android/assign/{{ $android->id }}/{{ Session::get('employee')->id }}">Assign</a></td>
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
				No androids yet.. <a href="android/create">Add one!</a>
			</div>
		</div>
	@endif

@endsection