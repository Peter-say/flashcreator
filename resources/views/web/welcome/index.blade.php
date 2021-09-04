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
                      <h3 class="fw-bolder mb-1">{{$blog->title}}</h3>
                      <!-- Post meta content-->
                      <div class="text-muted fst-italic mb-2">Posted on {{ date('Y-m-d H:i:s') }} by
                          <b></b>
                      </div>
                      <!-- Post categories-->
                      <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
                      <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a>
                  </header>

                  <section class="mb-5">
                      {{$blog->description}}
                  </section>
              </article>
              <!-- Comments section-->
              <section class="mb-5">
                  <div class="card bg-light">
                      <div class="card-body">
                          <!-- Comment form-->
                          <form action="{{route('comment.store')}}" method="POST">
                              @csrf
                              <textarea name="comment_body" class="form-control @error('body') is-invalid @enderror" rows="3" placeholder="Join the discussion and leave a comment!"></textarea>
                              <button type="submit" class="btn btn-success mt-2 mb-2">Post</button>
                          </form>

                          @foreach($comments as $comment)

                          <!-- Single comment-->
                          <div class="d-flex">
                              <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..."></div>
                              <div class="ms-3">
                                  <p class="fw-bold">{{$comment->comment_body}}</p>

                              </div>
                          </div>

                          @endforeach
                          <form action="" method="post">

                                  <input type="text" name="comment_reply" id="comment_reply">

                              <p id="reply">reply</p>
                              <button  id="submit_reply" type="submit" class="btn btn-sm btn-success mt-2 mb-2">Reply</button>

                      </form>

                  </div>
              </section>
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
                      <div class="input-group">
                          <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search">
                          <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                      </div>
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
