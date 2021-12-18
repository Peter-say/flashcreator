<nav class="navbar navbar-light bg-primary justify-content-between p-3">
    <div class="App-name">
        <a href="" class="navbar-brand">FlashBlog</a>
    </div>

    <div class="quick-links  justify-content-between pl-2">
    <a href="" style="font-size: 20px; color:white;"  class="mb-3">About</a>
        <a href="" class="btn btn-success btn-sm">Login</a>
    </div>

    <div class="search-web">
        <form class="form-inline" action="{{route('web.search')}}">
            <input name="query" class="form-control   mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>