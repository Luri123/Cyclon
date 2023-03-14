@if ($paginator->hasPages())
<div class="container d-flex justify-content-center py-2 mt-4">
        <div class="pagination__wrapper">
            <ul class="pagination list-unstyled">
        @if ($paginator->onFirstPage())
            <li class="disabled prev px-lg-5 mx-lg-5 px-0 mx-0"><span >&#10094;</span></li>
        @else
            <li><a class="prev px-lg-5 mx-lg-5 px-0 mx-0"  href="{{ $paginator->previousPageUrl() }}">&#10094;</a></li>
        @endif


      
        @foreach ($elements as $element)
           
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif


           
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
						<li><a class="active">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach


        
        @if ($paginator->hasMorePages())
			<li><a class="next px-lg-5 mx-lg-5 px-0 mx-0" href="{{ $paginator->nextPageUrl() }}">&#10095;</a></li>
        @else
            <li class="next disabled px-lg-5 mx-lg-5 px-0 mx-0"><span>&#10095;</span></li>
        @endif
    </ul>
</div>
</div>

@endif 

