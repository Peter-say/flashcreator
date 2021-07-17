@extends('layouts.app')
    @section('content')
    
    <nav class="navbar navbar-expand-md bg-primary navbar-dark fixed">
    <!-- Brand -->
    <a class="navbar-brand" href="#">flashCreator</a><br>


    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav mb-5">
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>

        <form class="form-inline" action="">
          <input class="form-control mr-sm-2 w-500 pr-20" type="text" placeholder="Search">
          <button class="btn btn-success mt-2 " type="submit">Search</button>
        </form>

      </ul>
    </div>
    <div class="d-flex justify-content-center mr-3">
    <a href=" login" class="mr-3"><button class="btn-success  btn btn-block rounded">Login</button></a>
    <a href="register"><button class="btn-success  btn btn-block rounded">Register</button></a>
    </div>
  </nav>


         
 @endsection

        
    
