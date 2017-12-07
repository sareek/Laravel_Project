@extends ('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">

<h1>Create a post</h1>

<form method='POST' action='/posts'>
 {{ csrf_field() }}
<hr>

  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="titl" name="title" >
  </div>
  <div class="form-group">
    <label for="body">body</label>
    <textarea id="bod" name="body" class="form-control"></textarea>
  </div>
 
 
  <button type="submit" class="btn btn-primary">Post</button>

@include('layouts.errors')
</form>
</div>
@endsection