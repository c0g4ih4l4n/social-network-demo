@extends ('layouts.main')
@section ('container')

    <section>
      <div class="container">
        <div class="row">

          <div class="col-md-8">

            <h1 class="page-header">Create New Group</h1>

            <div class="row">
              {{-- image --}}
              <div class="col-md-4">
                <img src="{{ URL::asset('img/group.png') }}" class="img-thumbnail" alt="">
              </div>

              {{-- infomation --}}
              <div class="col-md-8">
              <form method="POST" action="{{ URL::route('postCreateGroup') }}">
                {{ csrf_field ()}}
                <ul>
                  <li><strong>Group Name:</strong><input type="" name="name"></li>
                  <li><strong>Group Description:</strong><textarea name="description"></textarea></li>
                </ul>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div><br>

          </div>
        </div>
          

          @include ('layouts.rightbar')
        </div>
      </div>
    </section>

@stop