@extends('layouts.app')

@section('content')
	
	<div class="panel panel-primary">
	  <div class="panel-heading" style="background-color: #3E3F3A;">
	    <h3 class="panel-title">Create android device</h3>
	  </div>
	  <div class="panel-body">

	  @include('partials.errors')

		<form method="POST" action="/android">
		    {!! csrf_field() !!}

			<div class="form-group">
				<label for="imei">IMEI</label>
				<input type="text" class="form-control" placeholder="IMEI" name="imei">
			</div>

			<div class="form-group">
				<label for="make">Make</label>
				<input type="text" class="form-control" placeholder="Make" name="make">
			</div>

			<div class="form-group">
				<label for="model">Model</label>
				<input type="text" class="form-control" placeholder="Model" name="model">
			</div>

			<div class="form-group">
				<label for="email_address">Purchase date</label>
				<input type="date" class="form-control" placeholder="Purchase date" name="purchase_date">
			</div>

			<div class="form-group">
				<label for="issued_date">Issued date</label>
				<input type="date" class="form-control" placeholder="Issued date" name="issued_date">
			</div>

		    <div>
		        <button class="btn btn-default" type="submit">Add</button>
		    </div>
		</form>

		</div>
	</div>

@endsection