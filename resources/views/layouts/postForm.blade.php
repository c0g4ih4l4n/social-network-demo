<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Wall</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="{{ URL::route('post.store') }}">
      {{ csrf_field() }}
      @if (isset($wall))
      <input hidden="hidden" type="text" name="wall_id" value="{{ $wall->id }}">
      @else
      <input hidden="hidden" type="text" name="wall_id" value="{{ $user->wall_id }}">
      @endif
      <div class="form-group">
        <textarea class="form-control" placeholder="Write on the wall" name="content"></textarea>
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