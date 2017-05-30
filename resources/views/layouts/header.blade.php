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
      <form class="form-inline">

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
      </form>
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