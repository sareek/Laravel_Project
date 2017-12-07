<nav class="navbar navbar-inverse bg-inverse">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Today's Business</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Explore</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Learn</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    @if (Auth::check())

       
        <a class="nav-link ml-auto" href="#">{{Auth::user()->name}}</a>
          @endif
  </div>
</nav>

<!-- <div class="blog-masthead">
  <div class="container">
    <nav class="nav blog-nav">
      <a class="nav-link active" href="#">home</a>
       <a class="nav-link active" href="#">explore</a>
       <a class="nav-link active" href="#">visit</a> 
       <a class="nav-link active" href="#">contact</a>
 @if (Auth::check())

       
        <a class="nav-link ml-auto" href="#">{{Auth::user()->name}}</a>
          @endif
    </nav>
  </div>
</div> -->