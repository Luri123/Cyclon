<body>
    @if(isset($title))
    @section('title', $title)
    @endif
    @include ('frontend.header')

    <div class="container mt-5">
        <div class="row">
            <div class="col-8" id="right-side">
                @if(isset($blogs))

                <div class="row">
                    @foreach ($blogs as $blog)
                    <div class="col-12 bord px-5  py-4 mb-5">
                        <p class="text-uppercase textS text-center">{{$blog->category->name}}</p>
                        <p class="headL text-center">{{$blog->title}}</p>
                        <p class="textS text-center">
                            <i>Posted on{{\Carbon\Carbon::parse($blog->created_at)->format('F d, Y')}}</i>
                        </p>
                        <img class="img-fluid w-100 mt-2" src="{{ asset('img/' . $blog->image) }}">
                        <p class="s31 mt-4">{!! Str::limit(strip_tags($blog->description), 300, '...') !!}</p>
                        <div class="viewpost-button mb-3 blck">
                            <a class="button" href="{{ url('blog/' . $blog->category->slug . '/' . $blog->slug) }}">
                                <span class="text-center">Continue reading...</span>
                            </a>
                        </div>

                        <p class="shareon">Share</p>

                        <div class="info-content">
                            <div class="meta-space-top">
                                <span class="textS"><i>Author: {{$blog->author->name}}</i></span>
                            </div>
                            <div class="share-buttons">
                                <ul class="gri list-unstyled">
                                    <li>
                                        <a href="https://www.pinterest.com/"><i class="fa-brands fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/"><i class="fa-brands fa-pinterest-p"></i></a>
                                    </li>

                                </ul>
                            </div>
                            <div class=" meta-space-top"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
                <div class="row">
                    {{ $blogs->links('frontend.vendor.pagination.custom')}}
                </div>
            </div>





            <div class="col-4" id="left-side">

                <div class="row bord py-4">
                    <div class="col-12">
                        <p class="text-uppercase textS text-center">Follow us</p>
                        <hr>
                    </div>

                    <ul class="list-unstyled d-flex ">
                        <li class="xx d-flex align-items-center justify-content-center mx-3">
                            <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                        </li>
                        <li class="xx d-flex align-items-center justify-content-center mx-3">
                            <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li class="xx d-flex align-items-center justify-content-center mx-3">
                            <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                        </li>
                        <li class="xx d-flex align-items-center justify-content-center mx-3">
                            <a href="https://www.pinterest.com/"><i class="fa-brands fa-pinterest-p"></i></a>
                        </li>
                    </ul>
                </div>

                <div class="row bord mt-4">
                    <div class="col-12 pt-4">
                        <p class="text-uppercase textS text-center">Latest Articles</p>
                        <hr>
                    </div>
                    @foreach ($latest as $latest)
                    <div class="col-12 my-2">
                        <div class="row">
                            <div class="col-4">
                                <a href="{{ url('blog/' . $latest->category->slug . '/' . $latest->slug) }}"> <img class="img-fluid w-100" src="{{ asset('img/' . $latest->image) }}"></a>
                            </div>
                            <div class="col-8 last">
                                <a href="{{ url('blog/' . $latest->category->slug . '/' . $latest->slug) }}">
                                    <p class="s31">{{$latest->title}} </p>
                                </a>
                                <p class="textS"><i>Posted on
                                        {{\Carbon\Carbon::parse($latest->created_at)->format('F d, Y')}}</i></p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>


                <div class="row bord mt-4">
                    <div class="col-12 pt-4">
                        <p class="text-uppercase textS text-center mb-0">Categories</p>
                        <hr>
                    </div>

                    <div class="col-12 my-2">

                        @foreach($categories as $category)
                        <ul class="list-unstyled blc text-center">
                            <li class="textS text-uppercase"><a class="nav-link" href="{{ url('blog/' . $category->slug) }}">{{ $category->name}}</a></li>
                        </ul>
                        @endforeach
                    </div>



                </div>

            </div>

        </div>
    </div>



    @include ('frontend.footer')
</body>

</html>