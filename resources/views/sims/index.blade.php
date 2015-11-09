@extends('layouts.app')

@section('content')

	@if($sims->count())
		
		<div class="panel panel-primary">
		  <div class="panel-heading" style="background-color: #3E3F3A;">
		    <h3 class="panel-title">SIM cards <a href="sim/create" class="btn btn-xs btn-success pull-right"><i class="fa fa-plus"></i> Add</a></h3>
		  </div>
		  <div class="panel-body">

			<table id="myTable" class="table table-bordered table-hover table-striped">
				<thead>
				    <tr>
				        <th>Sim number</th>
				        <th>Number</th>
				        <th>Tariff</th>
				        <th>Roaming</th>
				        <th>DCOO</th>
				        <th>Activated date</th>
				       	<th></th>
				        @if(Session::has('apple'))
				        	<th></th>
				        @elseif(Session::has('android'))
				        	<th></th>
				        @endif
				    </tr>
				</thead>
				<tbody>
					@foreach($sims as $sim)
				        <tr>
				            <td>{{ $sim->sim_no }}</td>
				            <td>{{ $sim->number }}</td>
				            <td>{{ $sim->tariff }}</td>
				            <td>{{ $sim->roaming }}</td>
				            <td>{{ $sim->dcoo }}</td>
				            <td>{{ $sim->activated_date }}</td>
				            <td><a class="btn btn-xs btn-default btn-block" href="/sim/{{ $sim->id }}">Details</a></td>
				            @if(Session::has('apple'))
								<td><a class="btn btn-xs btn-default btn-block" href="/sim/apple/assign/{{ $sim->id }}/{{ Session::get('apple')->id }}">Assign</a></td>
							@elseif(Session::has('android'))
								<td><a class="btn btn-xs btn-default btn-block" href="/sim/android/assign/{{ $sim->id }}/{{ Session::get('android')->id }}">Assign</a></td>
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
				No sims yet.. <a href="sim/create">Add one!</a>
			</div>
		</div>
	@endif

@endsection