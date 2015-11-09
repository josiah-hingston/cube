@extends('layouts.app')

@section('content')

	@if($dockers->count())

		<div class="panel panel-primary">
		  <div class="panel-heading" style="background-color: #3E3F3A;">
		    <h3 class="panel-title">Dockers <a href="docker/create" class="btn btn-xs btn-success pull-right"><i class="fa fa-plus"></i> Add</a></h3>
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
					@foreach($dockers as $docker)
				        <tr>
				            <td>{{ $docker->asset }}</td>
				            <td>{{ $docker->serial }}</td>
				            <td>{{ $docker->make }}</td>
				            <td>{{ $docker->model }}</td>
				            <td>{{ $docker->issued_date }}</td>
				            <td>{{ $docker->purchase_date }}</td>
				            <td><a href="/docker/{{ $docker->id }}">Details</a></td>
				        </tr>
				    @endforeach
				</tbody>
			</table>

			</div>
		</div>

	@else
		<div class="panel panel-primary">
			<div class="panel-body">
				No dockers yet.. <a href="docker/create">Add one!</a>
			</div>
		</div>
	@endif

@endsection