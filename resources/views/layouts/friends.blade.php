<div class="panel panel-default friends">

  <div class="panel-heading">
    <h3 class="panel-title">My Friends</h3>
  </div>

  <div class="panel-body">
    <ul>
    @if (isset($friends))
    @foreach ($friends as $friend)
      <li><a href="{{ URl::route('profile', $friend->id) }}" class="thumbnail"><img src="{{ URL::asset('img/user.png') }}" alt=""></a></li>
    @endforeach
    @endif
    </ul>

    <div class="clearfix"></div>

    <a class="btn btn-primary" href="#">View All Friends</a>

  </div>
  
</div>
