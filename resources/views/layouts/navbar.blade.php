
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    @if (isset ($user))
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ URL::route('home') }}">Home</a></li>
        <li><a href="{{ URL::route('member') }}">Members</a></li>
        <li><a href="{{ URL::route('groups') }}">Groups</a></li>
        <li><a href="{{ URL::route('showWall', $user->wall_id) }}">Wall</a></li>
        <li><a href="{{ URL::route('profile') }}">Profile</a></li>
      </ul>
    </div><!--/.nav-collapse -->
    @endif
  </div>
</nav>