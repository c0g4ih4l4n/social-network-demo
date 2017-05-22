@extends ('layouts.main')
@section ('container')

    <section>
      <div class="container">
        <div class="row">

          <div class="col-md-8">

            <div class="profile">

              <h1 class="page-header">{{ $profile->name }}</h1>

              <div class="row">
                {{-- image --}}
                <div class="col-md-4">
                  <img src="{{ URL::asset('img/user.png') }}" class="img-thumbnail" alt="">
                </div>

                {{-- infomation --}}
                <div class="col-md-8">
                <form>
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


            </div>
          </div>
          

          @include ('layouts.rightbar')
        </div>
      </div>
    </section>

@stop