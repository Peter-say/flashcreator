<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ url('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('css/fontawesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('css/main.min.css') }}" rel="stylesheet" type="text/css" />


    <!-- dashboard -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <!-- end dashboard -->

    <style>
        .head {
            background: blue;
            color: white;
            text-align: center;
            margin-top: 6px;
            font-size: 30px;
        }

        .side {
            height: 50vh;
            border: 1px solid gray;
            border-radius: 10px;
        }

        #comment_reply , input{
        border-radius: 20px;
        width: 60%;
        outline: blue;
        border:3px solid blue;
        padding: 10px;
        }

        #comment_reply , input{
        display: none;
        }

        #reply , p{
        cursor: pointer;
        font-size: 20px;
        color: #234876;
        }

        #submit_reply{
            display: none;
        }
    </style>

  
<body>
    <nav class="navbar navbar-expand-md bg-primary navbar-dark fixed mb-5">
        <!-- Brand -->
        <a class="navbar-brand mr-5 ml-5" href="#">flashCreator</a><br>


        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse " id="collapsibleNavbar">
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
                    <input class="form-control  w-100 0" type="text" placeholder="Search">
                    <button class="btn btn-success mt-2 " type="submit">Search</button>
                </form>

            </ul>
        </div>
        <div class="d-flex justify-content-center mr-3">

            @guest
            @if (Route::has('login'))
            <a href="{{route('login')}}" class="mr-3"><button class="btn-success  btn btn-block rounded">Login</button></a>
            @endif


            @if (Route::has('register'))
            <a href="{{route('register')}}"><button class=" btn-success  btn btn-block rounded">Register</button></a>
            @endif

            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            <a href="{{route('home')}}"><button class=" btn-success  btn btn-block rounded ml-3">Dashboard</button></a>
            @endguest
        </div>
    </nav>


    @yield('content')

   <script>
        var input = document.getElementById('comment_reply');
        var reply = document.getElementById('reply');
        var submit_reply = document.getElementById('submit_reply');

        reply.addEventListener('click', function(){
            input.style.display = "block";
            reply.style.display = "none";
            submit_reply.style.display = "block";
        });

        submit_reply.addEventListener('click', function(){
            input.style.display = "none";
            reply.style.display = "block";
            submit_reply.style.display = "none";

           
        });
   </script>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) { //declaring the array outside of the
            if (!cleared[t.id]) { // function makes it static and global
                cleared[t.id] = 1; // you could use true and false, but that's more typing
                t.value = ''; // with more chance of typos
                t.style.color = '#fff';
            }
        }

      
    </script>

    <!-- dashboard-->
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="plugins/apex/apexcharts.min.js"></script>
    <script src="assets/js/dashboard/dash_1.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <!-- end dashboard -->
</body>

</html>