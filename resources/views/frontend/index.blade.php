<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title','Cyclon')</title>
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="section1 position-relative ">

    <nav class="navbar nav-index w-100 position-absolute navbar-expand-lg navbar-light mt-5">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            @include ('frontend.navbar')
          </ul>
          <ul class="navbar-nav mx-auto">
            <form class="form-inline" method="post" action="{{ route ('search') }}">
              @csrf
              <div class="c-height">
                <div class="single-search">
                  <input class="custom-input" type="text" name="search" placeholder="Search...">
                  <button><i class="fa fa-search"></i></button>
                </div>
              </div>
            </form>
          </ul>

          <ul class="navbar-nav icons ms-auto">
            <li class="nav-item linkStyle"  href="https://twitter.com/">
              <a class="nav-link">Follow us</a>
            </li>
            <li class="nav-item linkStyle">
              <a class="nav-link">
                <i class="fa-brands fa-facebook"></i>
              </a>
            </li>
            <li class="nav-item linkStyle">
              <a class="nav-link">
                <i class="fa-brands fa-twitter"></i>
              </a>
            </li>

            <li class="nav-item linkStyle">
              <a class="nav-link">
                <i class="fa-brands fa-instagram"></i>
              </a>
            </li>
            <li class="nav-item linkStyle">
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

    <div class="backgroundImage img-fluid">

      <div class="container topH py-3 px-4">
        <p class="text-uppercase">Cyclone</p>
        <p class="data">
          @php
          $time = Carbon\Carbon::now();

          @endphp
          {{\Carbon\Carbon::parse($time)->format('l, F d, Y')}}
        </p>
      </div>

      <div class="centered position-absolute">
        <div class="first">
          <p>The <span class="yellow">Root of Education</span>
            <span class="black"><i>are</i> bitter but the</span>
            fruit is <span class="yellow">sweet</span>
          </p>
        </div>
        <div class="second">
          <p class="s21"><i>Exhibition </i><span>'Venice and Aristotle'</span></p>
          <p class="s22">08 December, 2016 - 19 March, 2017</p>
        </div>
      </div>

    </div>
  </div>

  @if(isset($section1))
  <div class="section2 container-fluid mt-5 ">
    <div class="row" id="hap">

      <!-- kolona e dyte blloku -->

      <div class="col-lg-10 col-md-10" id="qender">
        <div class="row">
          @foreach($section1 as $article)
          <div class="col-lg-6">
            <!-- rreshti i pare i logos -->
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                <div class="snake d-flex py-3">
                  <img src="img/icon1.png" alt="">
                  <div class="art ml-2 s31"><i>{{$article->category->name}}</i></div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                <div class="mess d-flex">
                  <div>
                    <!-- <i class="fa-regular fa-message"></i>-->
                    <a class="ic" href="{{ url('blog/' . $article->category->slug . '/' . $article->slug) }}"><i class="fa-solid fa-arrow-right-from-bracket ng"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <!-- rreshti i dyte i tekstit -->
            <div class="row pt-4">
              <div>
                <h3><i>{{$article->title}}</i></h3>
                <p class="s33 mr-5">
                  {!! Str::limit(strip_tags($article->description), 500, '...') !!}
                </p>
                <div class="py-5 blck">
                  <a href="{{ url('blog/' . $article->category->slug . '/' . $article->slug) }}">Read More</a>

                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>

      @endif

      @if($section1[0])
      <!-- kolona e pare anesore-->
      <div class="col-lg-1 l order-first" id="blloku">
        <div class="row colum">
          <div style="writing-mode: vertical-lr;transform:rotate(180deg);" class="pb-3 s31"><i>01</i></div>
          <div style="writing-mode: vertical-lr;transform:rotate(180deg);" class="pb-5 s31"><i>{{$section1[0]->category->name}}</i></div>
          <div style="writing-mode: vertical-lr;transform:rotate(180deg);" class="pb-3 s31"><i>{{$section1[0]->title}}</i></div>
        </div>
      </div>
      @endif
      @if($section1[1])

      <!-- kolona e trete anesore -->

      <div class="col-lg-1 r order-last" id="blloku">
        <div class="row colum">
          <div style="writing-mode: vertical-lr;" class="pb-3 s31"><i>{{$section1[1]->category->name}}</i></div>
          <div style="writing-mode: vertical-lr;" class="pb-5 s31"><i></i>{{$section1[1]->title}}</div>
          <div style="writing-mode: vertical-lr;" class="pb-3 s31"><i>02</i></div>
        </div>
      </div>

      @endif
    </div>
  </div>

  @if(isset($section2)&&!empty($section2))
  <div class="section3 mt-5">
    <div class="row d-flex justify-content">
      <div class="col-lg-7 col-md-8 p-lg-5  px-md-1 py-md-4">
        <p class="s31 ps-5"><i>{{$section2[0]->category->name}}</i></p>
        @php
        $words = explode(" ", $section2[0]->title);
        $firstWords = "";
        for($i = 0; $i < count($words) - 2; $i++) 
        { $firstWords .=$words[$i] . " " ; } 
        $middleWord=$words[count($words) - 2]. "  " ; 
        $lastWord=$words[count($words) - 1]; 
        @endphp 
        <p class="s32 ps-5">{!!$firstWords!!}
          <i><span class="yellow">{!!$middleWord!!}</span>{!!$lastWord!!}</i>
          </p>
          <p class="s33 ps-4">{!! Str::limit(strip_tags($section2[0]->description), 340, '...') !!}</p>
          <div class="mt-2 blck ps-4"><a href="{{'blog/' . $section2[0]->category->slug . '/' . $section2[0]->slug}}"> Read More</a></div>
      </div>

      <div class="col-lg-4 col-md-4 px-md-0 d-flex align-items-center">
        <img class="img-fluid w-100" src="{{ asset('img/' . $section2[0]->image) }}">
      </div>
    </div>
  </div>
  @endif

  <div class=" section4 container mt-5 u">
    <div class="d-flex justify-content-center mb-3">
      <h1>Hot <span class="black">Topics</span></h1>
    </div>

    @if(isset($hottopic))
    <div class="parent container">
     <div class="row "> 
      @foreach($hottopic as $blog)
        <div class="card col-md-4 col-12">
          <a href="{{'blog/' . $blog->category->slug . '/' . $blog->slug}}">
          <div class="row pb-3">
            <img class="img-fluid-card" src="{{ asset('img/' . $blog->image) }}">
          </div>
          <div class="row pb-3">
              <p class="s31"><i>{{$blog->category->name}}</i></p>
              <p class="s52"><i>{{Str::limit($blog->title, 20, $end='...') }}</i></p>
              <p class="s34">{!! Str::limit(strip_tags($blog->description), 100, '...') !!}</p>
              <p class="card-text textS"><small class="text-muted">By {{$blog->author->name}}</small></p>
          </div></a>
        </div>  
         @endforeach
     </div>
    </div>
    @endif

  </div>

  <div class="row">
    {{ $hottopic->links('frontend.vendor.pagination.custom')}}
  </div>



  <div class="container section5 mt-5">
    <div class="d-flex justify-content-center">
      <h1>Most Read Article</h1>
    </div>

    @if(isset($mostRead))
    <div class="row">
      @foreach($mostRead as $blog)
      <div class="col-12 col-md-3 text-center py-lg-5 circle xsx">
        <a href="{{ url('blog/' . $blog->category->slug . '/' . $blog->slug) }}">
          <p><i>{{$blog->category->name}}</i></p>
          <p class="s52"><i>{{$blog->title}}</i></p>
          <p class="s53"><i>{{$blog->author->name}}</i></p>
        </a>
      </div>
      @endforeach
    </div>
    @endif
  </div>



  <div class="section6 mt-5" id="subs">
    <div class="d-flex justify-content-center mb-4">
      <h1>Subscribe</h1>
    </div>
    <div class="subs d-flex justify-content-center mx-3">
      <form action="{{ route ('subscribe') }}" method="POST" class="form-subscribe">
        @csrf
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Your email address" name="email">
        </div>

        <input class="btn" type="submit" value="Subscribe">

      </form>
    </div>
    <div class="d-flex justify-content-center mx-3"> @error('email')
      <span class="text-danger small mt-2">
        <i class="fa-sharp fa-regular fa-exclamation"></i>&nbsp;{{$message}}
      </span>
      @enderror
      @if ($message = Session::get('success'))
      <span class="text-success small mt-2">
        <i class="fa-solid fa-check"></i>&nbsp;{{$message}}
      </span>
      @endif
    </div>


  </div>


  @include ('frontend.footer')
</body>

</html>