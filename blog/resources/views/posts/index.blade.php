@extends ('layouts.master')

@section('content')
<!-- Jumbotron -->
      
    <div class="jumbotron static">
        <h2>Total cost</h2><br><br>
        <p class="lead"> You sell everything you want to not what they need. You wanna sell a fancy underwear u gotta fix him a date with a girl demanding a fancy underwear.</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>
             
</div>
      <!-- Example row of columns -->
    <div class="col-sm-8 blog-main">  
@foreach ($posts as $post)
      @include('posts.post')
      @endforeach
      @include('posts.business')
        <!-- <div class="col-lg-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div> -->
</div>
@endsection