<body>
   @if(isset($title))
   @section('title', $title)
   @endif
   @include ('frontend.header')

   @if(isset($blog))
   @php
   $paragraphs = explode("<p>", $blog->description);
      array_shift($paragraphs);
      $length = count($paragraphs);
      @endphp
   <div class="container mt-5">
      <div class="row">
         <div class="col-8 bord pt-4 px-4" id="right-side">
            <p class="text-uppercase textS text-center">{{$blog->category->name}}</p>
            <p class="headL text-center">{{$blog->title}}</p>
            <div class="text-center pb-2">
               <span class="textS text-center"><i class="fa-solid fa-calendar-days"></i>&nbsp;&nbsp;Posted on
                  {{\Carbon\Carbon::parse($blog->created_at)->format('F d, Y')}}
                  &nbsp;&nbsp;|&nbsp;&nbsp;</span>
               <span class="textS text-center"><i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;By {{$blog->author->name}}</span>
            </div>
            @if(isset($paragraphs)&&!empty($paragraphs))
            <p class="s31 mt-4">{!! $paragraphs[0] !!}</p>
            <img class="img-fluid w-100 mt-2" src="{{ asset('img/' . $blog->image) }}">
            @if(($length>1))
            <p class="s31 mt-4">{!! $paragraphs[1] !!}</p>
            @endif
            <div class="row mx-0 gx-0">
               <div class="col-6 pe-2">
                  <img class="img-fluid w-100 mt-2" src="{{ asset('img/' . $blog->image1) }}">
               </div>
               <div class="col-6 ps-2">
                  <img class="img-fluid w-100 mt-2" src="{{ asset('img/' . $blog->image2) }}">
               </div>
            </div>
            @if(($length>2))
            @for ($i = 2; $i < $length; $i++) <p class="s31 mt-4">{!!$paragraphs[$i] !!}</p>
               @endfor
               @endif
               @endif



               <div class="shareon my-3">You Might Also Like</div>
               <div class="row mb-2">
                  @if(isset($liked))
                  @foreach($liked as $liked)
                  <div class="col-4 last">
                     <a href="{{ url('blog/' . $liked->category->slug . '/' . $liked->slug) }}">
                        <img class="img-fluid w-100 mt-2" src="{{ asset('img/' . $liked->image) }}">
                        <p class="s31 mt-2 mb-0">{{$liked->title}} </p>
                     </a>
                     <p class="textS">Posted on
                        {{\Carbon\Carbon::parse($liked->created_at)->format('F d, Y')}}
                     </p>
                  </div>
                  @endforeach
                  @endif
               </div>

               <div class="shareon my-3">Write a comment</div>
               <div class="row mb-2">
                  @if ($message = Session::get('success'))
                  <div class="col-12 ms-3">
                     <p class="text-success small mt-2">
                        <i class="fa-solid fa-check"></i>&nbsp;{{$message}}
                     </p>
                  </div>
                  @endif
                  <div class="col-12">
                     <form method="POST" action="{{url('comments')}}" id="comments">
                        @csrf
                        <input type="hidden" value="{{$blog->slug}}" name="blog_slug">
                        <div class="row">
                           <div class="col-md-12 mb-2">
                              <div class="form-group">
                                 <input type="text" class="form-control" name="username" placeholder="Name">
                              </div>
                           </div>
                           @error('username')
                           <div class="col-12">
                              <p class="text-danger s31">
                                 <i class="fa-sharp fa-regular fa-exclamation"></i>&nbsp;{{$message}}
                              </p>
                           </div>
                           @enderror
                           <div class="col-md-12 mb-2">
                              <div class="form-group">
                                 <textarea name="comment_body" class="form-control" rows="8" placeholder="Message"></textarea>
                              </div>
                           </div>
                           @error('comment_body')
                           <div class="col-12">
                              <p class="text-danger s31">
                                 <i class="fa-sharp fa-regular fa-exclamation"></i>&nbsp;{{$message}}
                              </p>
                           </div>
                           @enderror
                           <div class="col-md-12 d-flex justify-content-end">
                              <div class="form-group">
                                 <button type="submit" class="btn btnComment s31 px-4">Publish comment</button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>


               <div class="shareon mt-3">Comments</div>
               @forelse($blog->comments as $comment)
               <div class="row mx-4">
                  <div class="col-12">
                     <p class="cUsername mb-1">{{$comment->username}}</p>
                  </div>
                  <div class="col-12">
                     <p class="s31 mb-1">{{$comment->comment_body}}</p>
                  </div>
                  <div class="col-12">
                     <p class="textSs">Commented on {{$comment->created_at->format('d-m-Y')}}</p>
                  </div>
               </div>
               <hr class="mt-0">

               @empty
               <p class="s31 ms-4">No comments yet</p>
               @endforelse
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
            <div class="row bord my-4 py-4">
               <div class="col-12">
                  <p class="text-uppercase textS text-center">About author</p>
                  <hr>
               </div>
               <div class="d-flex justify-content-center">
                  <img class="img-fluid w-25" src="{{ asset('img/' . $blog->author->image) }}" style="border-radius: 50%">
               </div>
               <p class="textS text-center mt-3">{{$blog->author->name}}</p>
               <div class="textS text-center px-4">
                  {!! '<p>' . strip_tags($blog->author->description) . '</p>' !!}
               </div>
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

   @endif

   @include ('frontend.footer')
</body>

</html>