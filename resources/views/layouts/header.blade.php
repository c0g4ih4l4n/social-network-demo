<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Social Network</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/font-awesome.css') }}" rel="stylesheet">
  </head>



  <body>

  <header>
    <div class="container">
      <a href="{{ URL::route('home') }}"><img src="{{ URL::asset('img/logo.png') }}" class="logo" alt=""></a>


      @if (!isset($user))
{{--       <form class="form-inline">

        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail3">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">
        </div>

        <div class="form-group">
          <label class="sr-only" for="exampleInputPassword3">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-default">Sign in</button><br>

        <div class="checkbox">
          <label>
            <input type="checkbox"> Remember me
          </label>
        </div>
      </form> --}}

      <form class="form-inline" method="POST" action="{{ route('login') }}">

        {{ csrf_field() }}

        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail3">E-Mail address</label>
          <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email" value="{{ old('email') }}" name="email" required autofocus>
          @if ($errors->has('email'))
            <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
          @endif
        </div>

        <div class="form-group">
          <label class="sr-only" for="exampleInputPassword3">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password" name="password" required>
          @if ($errors->has('password'))
            <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
          @endif
        </div>

        <button type="submit" class="btn btn-default">Sign in</button><br>

        <div class="checkbox">
          <label>
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
          </label>
        </div>
      </form>

     {{--  <form class="form-horizontal form-inline" role="form" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <label for="email" class="col-md-4 control-label">E-Mail Address</label>

          <div class="col-md-6">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
          </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <label for="password" class="col-md-4 control-label">Password</label>

          <div class="col-md-6">
            <input id="password" type="password" class="form-control" name="password" required>

            @if ($errors->has('password'))
              <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-6 col-md-offset-4">
            <div class="checkbox">
              <label>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
              </label>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-8 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Login
            </button>

            <a class="btn btn-link" href="{{ route('password.request') }}">
                Forgot Your Password?
            </a>
          </div>
        </div>
      </form> --}}

      @else
      <div class="pull-right">
      <ul class="nav nav-tabs">
        <li class="presentation active"><a href="{{ URL::route('profile', $user->id) }}">Hello,{{ $user->name }}</a></li>
        <li class="presentation"><a href="{{ URL::route('home') }}">Home</a></li>
        <li class="presentation"><a href="{{ URL::route('logout') }}">Log out</a></li>
      </ul>
      </div>
      @endif

    </div>
  </header>

@include ('layouts.navbar')