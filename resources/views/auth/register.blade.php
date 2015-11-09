@extends('layouts.app')

@section('content')

    <div class="panel panel-primary">
      <div class="panel-heading" style="background-color: #3E3F3A;">
        <h3 class="panel-title">Register</h3>
      </div>
      <div class="panel-body">

      @include('partials.errors')

        <form method="POST" action="/auth/register">
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password">
            </div>

            <div class="form-group">
                <label for="confirm">Confirm Password</label>
                <input type="password" class="form-control" name="password_confirmation">
            </div>

            <div>
                <button class="btn btn-default" type="submit">Register</button>
            </div>
        </form>

        </div>
    </div>

@endsection