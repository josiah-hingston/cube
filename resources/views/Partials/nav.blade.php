<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="/"><i class="fa fa-cube"></i> Cube</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
    @if( ! Auth::user())
      <form method="POST" action="/auth/login" class="navbar-form navbar-right">
        {!! csrf_field() !!}
        <div class="form-group">
          <input type="email" placeholder="Email" class="form-control" value="{{ old('email') }}" name="email">
        </div>
        <div class="form-group">
          <input type="password" placeholder="Password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-success">Sign in</button>
        <a href="/auth/register"> Register</a>
      </form>
    @else
      <form method="GET" action="/auth/logout" class="navbar-form navbar-right">
        {!! csrf_field() !!}
        <button type="submit" class="btn btn-success pull-right">Sign out</button>
      </form>
      <ul class="nav navbar-nav pull-right">
        <li><a href="#">G'day {{ Auth::user()->name }}</a></li>
      </ul>
    @endif
    </div><!--/.navbar-collapse -->
  </div>
</nav>