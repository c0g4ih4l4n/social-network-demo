@extends ('layouts.main')
@section ('container')

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="profile">
              <h1 class="page-header">{{ $profile->name }}
              @if ($user->profile_id == $profile->id)
              <a class="btn btn-primary" href="{{ URL::route('editProfile') }}">Update Profile</a>
              @endif
              </h1>
              <div class="row">
                <div class="col-md-4">
                  <img src="{{ URL::asset('img/user.png') }}" class="img-thumbnail" alt="">
                </div>
                <div class="col-md-8">
                  <ul>
                    <li><strong>Name:</strong>{{ $profile->name }}</li>
                    <li><strong>Email:</strong>{{ $profile->email }}</li>
                    <li><strong>City:</strong>{{ $profile->city }}</li>
                    <li><strong>Country:</strong>{{ $profile->country }}</li>
                    <li><strong>Gender:</strong>{{ $profile->sex }}</li>
                    <li><strong>DOB:</strong>{{ $profile->birthday }}</li>
                  </ul>
                </div>
              </div><br><br>
              <div class="row">
                <div class="col-md-12">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Profile Wall</h3>
                    </div>
                    <div class="panel-body">
                      <form>
                        <div class="form-group">
                          <textarea class="form-control" placeholder="Write on the wall"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                        <div class="pull-right">
                          <div class="btn-toolbar">
                            <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i>Text</button>
                            <button type="button" class="btn btn-default"><i class="fa fa-file-image-o"></i>Image</button>
                            <button type="button" class="btn btn-default"><i class="fa fa-file-video-o"></i>Video</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          

          @include ('layouts.rightbar')
        </div>
      </div>
    </section>

@stop