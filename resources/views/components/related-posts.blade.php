<div class="col-md-4">
    <div id="related-posts">

     {{ $videos; }}
        @foreach ($videos as $video)
            <!-- video item -->
            <div class="related-video-item">
                <div class="thumb">
                    <small class="time">{{ $video->length }}</small>
                    <a href="#"><img src="{{ $video->thumbnail }}" alt=""></a>
                </div>
                <a href="#" class="title">{{ $video->description }}
                </a>
                <a class="channel-name" href="#">{{ $video->name }}<span>
                        <i class="fa fa-check-circle"></i></span></a>
            </div>
            <!-- // video item -->
        @endforeach
    </div>
</div>
