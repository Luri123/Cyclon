@php
$categories=App\Models\Category::where('status','1')
                                ->whereHas('blogs', function($query) {
                                $query->where('status', '1');
                                })->get();


@endphp
@if(isset($categories))
@foreach($categories as $category)
<li class="nav-item linkStyle">
    <a class="nav-link" href="{{ url('blog/' . $category->slug) }}">{{ $category->name}}</a>
</li>
@endforeach
<li class="nav-item linkStyle">
    <a class="nav-link" href="{{ route ('contact') }}">Contact</a>
</li>
@endif