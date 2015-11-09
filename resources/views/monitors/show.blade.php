@extends('layouts.app')

@section('content')

	<div class="col-md-6 col-sm-12">

		<div class="list-group">
		  <a href="#" class="list-group-item">
		    <h4 class="list-group-item-heading">Asset</h4>
		    <p class="list-group-item-text">{{ $monitor->asset }}</p>
		  </a>
		  <a href="#" class="list-group-item">
		    <h4 class="list-group-item-heading">Serial</h4>
		    <p class="list-group-item-text">{{ $monitor->serial }}</p>
		  </a>
		  <a href="#" class="list-group-item">
		    <h4 class="list-group-item-heading">Make</h4>
		    <p class="list-group-item-text">{{ $monitor->make }}</p>
		  </a>
		  <a href="#" class="list-group-item">
		    <h4 class="list-group-item-heading">Model</h4>
		    <p class="list-group-item-text">{{ $monitor->model }}</p>
		  </a>
		  <a href="#" class="list-group-item">
		    <h4 class="list-group-item-heading">Issued date</h4>
		    <p class="list-group-item-text">{{ $monitor->issued_date }}</p>
		  </a>
		  <a href="#" class="list-group-item">
		    <h4 class="list-group-item-heading">Purchased date</h4>
		    <p class="list-group-item-text">{{ $monitor->purchase_date }}</p>
		  </a>
		</div>

	</div>

@endsection