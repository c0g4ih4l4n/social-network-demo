<div class="panel panel-default groups">

  <div class="panel-heading">
    <h3 class="panel-title">Latest Groups</h3>
  </div>

  <div class="panel-body">

  @if (isset($user))
  @foreach ($user->groups as $group)
    <div class="group-item">
      <img src="{{ URL::asset('img/group.png') }}" alt="">
      <h4><a href="#" class="">{{ $group->name }}</a></h4>
      <p>{{ $group->description }}</p>
    </div>

    <div class="clearfix"></div>
  @endforeach
  @endif

    <a href="{{ URL::route('groups') }}" class="btn btn-primary">View All Groups</a>
  </div>
</div>