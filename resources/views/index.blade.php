@extends('master')
@section('content')
<div class="site-output">
    <div id="all-output" class="col-md-12">

        <h1 class="new-video-title"><i class="fa fa-bolt"></i> {{ $title }}</h1>
        <h2 class="new-video-title">{{ $description }}</h2>
        <div class="row">
            @foreach ($videos as $video )
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="video-item">
                    <div class="thumb">
                        <div class="hover-efect"></div>
                        <small class="time">{{ $video->length }}</small>
                        <a href="#"><img src="{{ $video->thumbnail  }}" alt=""></a>
                    </div>
                    <div class="video-info">
                        <a href="{{ route('video.show', $video->slug) }}" class="title">{{ $video->name }} </a>

                        <a class="channel-name" href="#">{{ $video->name }}<span>
                                <i class="fa fa-check-circle"></i></span></a>
                        <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
                        <span class="date"><i class="fa fa-clock-o"></i>{{ $video->created_at }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div><!-- // row -->



</div>
</div>
@endsection