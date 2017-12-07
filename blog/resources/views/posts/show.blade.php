@extends ('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">
<h1>{{$post->title}}</h1>

{{$post->body}}
<hr>
<div class="comments">
	@foreach ($post->comments as $comment)
	<li class="list-group-item">
	<strong>
	{{$comment->created_at->diffForHumans()}}: &nbsp;		
		</strong>
	
	<article>
		{{$comment->body}}
		</li>

	</article>
	@endforeach
</div>
<hr>
<!-- add a comment -->
<div class="card">
	<div class="card-block">
		<form method="POST" action="/posts/{{$post->id}}/comments">
		{{csrf_field()}}
		<div class="form-group">
			<textarea name="body" placeholder="your comment here."class="form-control"></textarea>
		</div>
		
		
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Add Comment</button>
		</div>
		</form>
		@include('layouts.errors')
	</div>
</div>




@endsection













<!-- 
<h1>Create a post</h1>

<form method='POST' action='/posts'>
 {{ csrf_field() }}
<hr>

  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="form-group">
    <label for="body">body</label>
    <textarea id="body" name="body" class="form-control"></textarea>
  </div>
 
 
  <button type="submit" class="btn btn-primary">Post</button>
</form>


</div> --> 
