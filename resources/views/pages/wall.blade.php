

@extends ('layouts.main')

@section ('container')

<section>
  <div class="container">
    <div class="row">

      @include ('layouts.rightbar')
      

      <div class="col-md-8">

        @include ('layouts.postForm')
        <div class="panel panel-default post">
          <div class="panel-body">

          @foreach ($posts as $post)
             <div class="row">

               <div class="col-sm-2">
               @if ($post->user_id == $post->wall->user->id && $post->wall_id == $user->wall_id)
                 <a href="{{ URL::route('showWall', $post->user_id )}}" class="post-avatar thumbnail"><img src="{{ URL::asset('img/user.png') }}" alt=""><div class="text-center">{{ $post->user->name }}</div></a>
                @else 
                <div class="text-center">
                <a href="{{ URL::route('showWall', $post->user->wall_id) }}">{{ $post->user->name }}</a>
                >
                <a href="{{ URL::route('showWall', $post->wall_id) }}">{{ $post->wall->user->name }}</a>
                </div>
                @endif

                 <div class="likes text-center">7 Likes</div>

               </div>

               <div class="col-sm-10">

                 <div class="bubble">
                   <div class="pointer">
                     <p>{{ $post->content }}</p>
                   </div>
                   <div class="pointer-border"></div>
                 </div>


                 <p class="post-actions"><a href="#">Comment</a> - <a href="#">Like</a> - <a href="#">Follow</a> - <a href="#">Share</a></p>


                @include ('layouts.commentForm')


                 <div class="comments">
                  @foreach ($post->comment as $comment)
                   <div class="comment">
                     <a href="#" class="comment-avatar pull-left"><img src="{{ URL::asset('img/user.png') }}" alt=""></a>
                     <div class="comment-text">

                       <p><a href="{{ URL::route('showWall', $comment->user->wall_id) }}">{{ $comment->user->name }}</a> {{ $comment->content }}</p>
                     </div>
                   </div>
                  @endforeach
                   <div class="clearfix"></div>
                 </div> {{-- End Comment --}}


               </div> 
             </div>
          @endforeach

          </div>
        </div>


      </div>


    </div>
  </div>
</section>
@stop