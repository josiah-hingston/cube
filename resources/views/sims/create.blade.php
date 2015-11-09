@extends('layouts.app')

@section('content')

	@include('partials.errors')
	
	<div class="panel panel-primary">
	  <div class="panel-heading" style="background-color: #3E3F3A;">
	    <h3 class="panel-title">Add SIM</h3>
	  </div>
	  <div class="panel-body">

	  @include('partials.errors')

		<form method="POST" action="/sim">
		    {!! csrf_field() !!}

			<div class="form-group">
				<label for="sim_no">Sim number</label>
				<input type="text" class="form-control" placeholder="Sim number" name="sim_no">
			</div>

			<div class="form-group">
				<label for="number">Number</label>
				<input type="text" class="form-control" placeholder="Number" name="number">
			</div>

			<div class="form-group">
				<label for="tariff">Tariff</label>
				<input type="text" class="form-control" placeholder="Tariff" name="tariff">
			</div>

			<div class="form-group">
				<label for="roaming">Roaming</label>
				<input type="text" class="form-control" placeholder="Roaming" name="roaming">
			</div>

			<div class="form-group">
				<label for="dcoo">DCOO</label>
				<input type="text" class="form-control" placeholder="Data cap post opt out" name="dcoo">
			</div>

			<div class="form-group">
				<label for="activated_date">Activated date</label>
				<input type="date" class="form-control" placeholder="Activated date" name="activated_date">
			</div>

		    <div>
		        <button class="btn btn-default" type="submit">Add</button>
		    </div>
		</form>

		</div>
	</div>

@endsection