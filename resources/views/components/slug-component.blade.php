<div class="col-md-12">
    <ul class="main-category-menu">

        @foreach ($category as $item)
            <li class="color-1"><a href="{{ route('categories.videos.index', $item->slug)}}"><i class="{{ $item->icon}}"></i>{{ $item->name}}</a>
            </li>
        @endforeach
    </ul>
</div><!-- // col-md-14 -->
