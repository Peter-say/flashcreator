  @extends('layouts.app')

  @section('content')


  <div class="container mt-5">
      <div class="row">
          <div class="col-lg-8">
              <!-- Post content-->
              <article>
                  <!-- Post header-->
                  <header class="mb-4">
                      <!-- Post title-->
                      @if($blogs->count())
                      @foreach($blogs as $blog)
                      <h3 class="fw-bolder mb-1 mt-5">{{$blog->title}}</h3>
                      <!-- Post meta content-->
                      <div class="text-muted fst-italic mb-2">Posted on {{ date('Y-m-d H:i:s') }} by
                          <b></b>
                      </div>

                      <!-- Post categories-->
                      <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
                      <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a>
                  </header>
                  <div class="post-image mt-3">
                      <img class="img-fluid" src="{{asset('postImages/' . $blog->image)}}" alt="..." />
                  </div>
                  <section class="mb-2">
                      {{$blog->description}}
                  </section>
                   <a href="{{route('blog.show' , $blog->id)}}"> <button class="btn-primary  mb-5 btn-xl">Read More</button></a>
              </article>
             
              @endforeach
              @else
              <div class="">No Data Yet</div>
              @endif
          </div>

          <!-- Side widgets-->
          <div class="col-lg-4">
              <!-- Search widget-->
              <div class="card mb-4">
                  <div class="card-header">Search</div>
                  <div class="card-body">
                     <form action="{{route('web.search')}}">
                     <div class="input-group">
                          <input class="form-control" name="query" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search">
                          <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                      </div>
                     </form>
                  </div>
              </div>
              <!-- Categories widget-->
              <div class="card mb-4">
                  <div class="card-header">Categories</div>
                  <div class="card-body">
                      <div class="row">
                          <div class="col-sm-6">
                              <ul class="list-unstyled mb-0">

                                  <li><a href="#!"></a></li>
                                  <li><a href="#!">HTML</a></li>
                                  <li><a href="#!">Freebies</a></li>
                              </ul>

                          </div>
                          <div class="col-sm-6">
                              <ul class="list-unstyled mb-0">
                                  <li><a href="#!">JavaScript</a></li>
                                  <li><a href="#!">CSS</a></li>
                                  <li><a href="#!">Tutorials</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- Side widget-->
              <div class="card mb-4">
                  <div class="card-header">Side Widget</div>
                  <div class="card-body">You can put anything you want inside of these side widgets. They are easy to
                      use, and feature the Bootstrap 5 card component!</div>
              </div>
          </div>
      </div>
  </div>
  @endsection