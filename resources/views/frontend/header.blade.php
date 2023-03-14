<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</head>

<body>

    <nav class="sectionH navbar w-100  navbar-expand-lg navbar-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link linkStyle" href="{{ url('/')}}">Home</a>
                    </li>
                    @include ('frontend.navbar')
                </ul>


                <ul class="navbar-nav mx-auto">
                    <form class="form-inline mb-0" method="post" action="{{ route ('search') }}">
                        @csrf
                        <div class="single-search c-height">
                            <input class="custom-input" type="text" name="search" placeholder="Search...">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </ul>


                <ul class="navbar-nav icons ms-auto">
                    <li class="nav-item linkStyle">
                        <a class="nav-link"  href="https://twitter.com/">Follow us</a>
                    </li>
                    <li class="nav-item linkStyle">
                        <a class="nav-link" href="https://www.facebook.com/">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                    </li>
                    <li class="nav-item linkStyle">
                        <a class="nav-link" href="https://twitter.com/">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </li>

                    <li class="nav-item linkStyle">
                        <a class="nav-link" href="https://www.instagram.com/">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <li class="nav-item linkStyle" href="https://www.pinterest.com/">
                        <a class="nav-link">
                            <i class="fa-brands fa-pinterest-p"></i>
                        </a>
                    </li>
                    @guest
                    <li class="nav-item linkStyle">
                        <a href="{{route('login')}}" class="nav-link">
                            <i class="fas fa-user"></i>
                        </a>
                    </li>
                    @else
                    <li class="nav-item linkStyle">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>