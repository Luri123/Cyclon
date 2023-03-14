<body>
    @if(isset($title))
    @section('title', $title)
    @endif
    @include ('frontend.header')

    <div class="container my-5">
        @if(isset($message))
        <div class="d-flex justify-content-center">
            <p class="s32">{{$message}}...</p>
        </div>
        @endif
        @if(isset($errori))
        <div class="alert alert-danger">{{$errori}}</div>
        @endif
    </div>
    @if(isset($likeable))
    <div class=" section4 container mt-5 u">
        <div class="d-flex justify-content-center mb-3">
            <p class="s32">You might like</p>
        </div>
        <div class="parent container">
            <div class="row">
                @foreach($likeable as $blog)
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
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif

    <div class="container my-5">
        @if(isset($results))
        @foreach($results as $result)
        <div class="row bord mt-4 p-4">
            <div class="col-4">
                <img class="img-fluid w-100 mt-2" src="{{ asset('img/' . $result->image) }}">
            </div>
            <div class="col-8">
                <p class="headL">{{$result->title}}</p>
                <p class="textS"><span class="text-uppercase">{{$result->category->name}}</span>
                    |<span class="text"> <i>Posted on
                            {{\Carbon\Carbon::parse($result->created_at)->format('F d, Y')}}
                        </i></span></p>

                <p class="s31 mt-4">{!! Str::limit(strip_tags($result->description), 300, '...') !!}</p>
                <div class="viewSearch mb-3 blck">
                    <a class="button" href="{{ url('blog/' . $result->category->slug . '/' . $result->slug) }}">
                        Continue reading...
                    </a>
                </div>

                <p class="textS"><i>Author: {{$result->author->name}}</i></p>


            </div>
        </div>
        @endforeach
        @endif
    </div>
</body>

</html>