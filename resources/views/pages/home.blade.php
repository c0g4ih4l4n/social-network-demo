

@extends ('layouts.main')

@section ('container')

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-8">

        @include ('layouts.postForm')
        <div class="panel panel-default post">
          <div class="panel-body">
             <div class="row">

               <div class="col-sm-2">
                 <a href="profile.html" class="post-avatar thumbnail"><img src="img/user.png" alt=""><div class="text-center">DevUser1</div></a>
                 <div class="likes text-center">7 Likes</div>
               </div>

               <div class="col-sm-10">

                 <div class="bubble">
                   <div class="pointer">
                     <p>Hey I was wondering if you wanted to go check out the football game later. I heard they are supposed to be really good!</p>
                   </div>
                   <div class="pointer-border"></div>
                 </div>

                 <p class="post-actions"><a href="#">Comment</a> - <a href="#">Like</a> - <a href="#">Follow</a> - <a href="#">Share</a></p>
                 <div class="comment-form">
                   <form class="form-inline">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="enter comment">
                    </div>
                    <button type="submit" class="btn btn-default">Add</button>
                  </form>
                 </div>
                 <div class="clearfix"></div>



                 <div class="comments">

                   <div class="comment">
                     <a href="#" class="comment-avatar pull-left"><img src="img/user.png" alt=""></a>
                     <div class="comment-text">
                       <p>I am just going to paste in a paragraph, then we will add another clearfix.</p>
                     </div>
                   </div>

                   <div class="clearfix"></div>
                 </div> {{-- End Comment --}}

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