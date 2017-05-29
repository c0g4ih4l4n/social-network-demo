<div class="comment-form">
	<form class="form-inline" action="{{ URL::route('comment.store') }}" method="post">
		{{ csrf_field() }}
		<div class="form-group">
		<input type="text" hidden="hidden" name="post_id" value="{{ $post->id }}">
			<input type="text" name="content" class="form-control" placeholder="enter comment">
		</div>
		<button type="submit" class="btn btn-default">Comment</button>
	</form>
</div>

<div class="clearfix"></div>