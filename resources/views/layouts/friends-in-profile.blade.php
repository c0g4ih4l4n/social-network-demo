<div class="panel panel-default friends">

  <div class="panel-heading">
    <h3 class="panel-title">Friends</h3>
  </div>

  <div class="panel-body">
    <ul>
    @if (isset($profile))
    @foreach ($profile->user->friends as $friend)
      <li><a href="{{ URL::route('showWall', $friend->wall_id) }}" class="thumbnail"><img src="{{ URL::asset('img/user.png') }}" alt="">{{ $friend->name }}</a></li>
    @endforeach
    @endif
    </ul>

    <div class="clearfix"></div>

    <a class="btn btn-primary" href="#">View All Friends</a>

  </div>
  
</div>
