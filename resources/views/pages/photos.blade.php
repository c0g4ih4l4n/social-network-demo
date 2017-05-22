
@extends ('layouts.main')
@section ('container')

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h1 class="page-header">Photos</h1>
            <ul class="photos gallery-parent">
              <li><a href="img/sample1.jpg" data-hover="tooltip" data-placement="top" title="image" data-gallery="mygallery" data-parent=".gallery-parent" data-title="title" data-footer="this is a footer" data-toggle="lightbox"><img src="img/sample1.jpg" class="img-thumbnail" alt=""></a></li>
              <li><a href="img/sample2.jpg" data-hover="tooltip" data-placement="top" title="image" data-gallery="mygallery" data-parent=".gallery-parent" data-title="title" data-footer="this is a footer" data-toggle="lightbox"><img src="img/sample2.jpg" class="img-thumbnail" alt=""></a></li>
              <li><a href="img/sample3.jpg" data-hover="tooltip" data-placement="top" title="image" data-gallery="mygallery" data-parent=".gallery-parent" data-title="title" data-footer="this is a footer" data-toggle="lightbox"><img src="img/sample3.jpg" class="img-thumbnail" alt=""></a></li>
              <li><a href="img/sample4.jpg" data-hover="tooltip" data-placement="top" title="image" data-gallery="mygallery" data-parent=".gallery-parent" data-title="title" data-footer="this is a footer" data-toggle="lightbox"><img src="img/sample4.jpg" class="img-thumbnail" alt=""></a></li>
              <li><a href="img/sample5.jpg" data-hover="tooltip" data-placement="top" title="image" data-gallery="mygallery" data-parent=".gallery-parent" data-title="title" data-footer="this is a footer" data-toggle="lightbox"><img src="img/sample5.jpg" class="img-thumbnail" alt=""></a></li>
              <li><a href="img/sample6.jpg" data-hover="tooltip" data-placement="top" title="image" data-gallery="mygallery" data-parent=".gallery-parent" data-title="title" data-footer="this is a footer" data-toggle="lightbox"><img src="img/sample6.jpg" class="img-thumbnail" alt=""></a></li>
            </ul>
          </div>
          
          @include ('layouts.rightbar')
        </div>
      </div>
    </section>

@stop
