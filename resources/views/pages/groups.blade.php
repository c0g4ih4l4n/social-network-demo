@extends ('layouts.main')

@section ('container')
<section>
  <div class="container">
    <div class="row">

    {{-- left side group --}}
      <div class="col-md-8">

        <div class="groups">

          <h1 class="page-header">All Groups</h1>
          <a class="btn btn-primary" href="{{ URL::route('createGroup') }}">Create New Group</a>

          @foreach ($list_group as $group)
          <div class="group-item">
            <img src="img/group.png" alt="">
            <h4><a href="#">{{ $group->name }}</a></h4>
            <p>{{ $group->description }}</p>
            <p>
              <a href="#" class="btn btn-default">Join Group</a>
            </p>
          </div>

          <div class="clearfix"></div>

          @endforeach

        </div>
      </div>
      {{-- end group --}}


      {{-- friend section  - right side --}}
      <div class="col-md-4">
        <div class="panel panel-default friends">
          <div class="panel-heading">
            <h3 class="panel-title">My Friends</h3>
          </div>
          <div class="panel-body">
            <ul>
              <li><a href="profile.html" class="thumbnail"><img src="img/user.png" alt=""></a></li>
            </ul>
            <div class="clearfix"></div>
            <a class="btn btn-primary" href="#">View All Friends</a>
          </div>
        </div>

      </div>
      {{-- end of friend section --}}

    </div>

  </div>

</section>

@stop
