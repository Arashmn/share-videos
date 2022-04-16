@extends('master')
@section('content')
<div class="site-output">
    <div id="all-output" class="col-md-12">

        <h1 class="new-video-title"><i class="fa fa-bolt"></i> آخرین ویدیو‌ها</h1>
        <x-last-video ></x-last-video>
        <h1 class="new-video-title"><i class="fa fa-bolt"></i> پربازدیدترین ویدیوها</h1>
        <div class="row">
            @foreach ($poplourVideos as $poplourvideo)
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="video-item">
                    <div class="thumb">
                        <div class="hover-efect"></div>
                        <small class="time">{{ $poplourvideo->length }}</small>
                        <a href="#"><img src="{{ $poplourvideo->thumbnail  }}" alt=""></a>
                    </div>
                    <div class="video-info">
                        <a href="#" class="title">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                            چاپ </a>
                        <a class="channel-name" href="#">{{ $poplourvideo->name }}<span>
                                <i class="fa fa-check-circle"></i></span></a>
                        <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
                        <span class="date"><i
                                class="fa fa-clock-o"></i>{{ $poplourvideo->created_at }}</span>
                    </div>
                </div>
            </div>
        @endforeach
        </div>

        <h1 class="new-video-title"><i class="fa fa-bolt"></i> محبوب‌ترین‌ها</h1>
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="video-item">
                    <div class="thumb">
                        <div class="hover-efect"></div>
                        <small class="time">10:53</small>
                        <a href="#"><img src="https://picsum.photos/446/240?random=5" alt=""></a>
                    </div>
                    <div class="video-info">
                        <a href="#" class="title">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                            چاپ </a>
                        <a class="channel-name" href="#">مهرداد سامی<span>
                                <i class="fa fa-check-circle"></i></span></a>
                        <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
                        <span class="date"><i class="fa fa-clock-o"></i>5 ماه پیش </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="video-item">
                    <div class="thumb">
                        <div class="hover-efect"></div>
                        <small class="time">10:53</small>
                        <a href="#"><img src="https://picsum.photos/446/240?random=7" alt=""></a>
                    </div>
                    <div class="video-info">
                        <a href="#" class="title">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                            چاپ </a>
                        <a class="channel-name" href="#">مهرداد سامی<span>
                                <i class="fa fa-check-circle"></i></span></a>
                        <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
                        <span class="date"><i class="fa fa-clock-o"></i>5 ماه پیش </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="video-item">
                    <div class="thumb">
                        <div class="hover-efect"></div>
                        <small class="time">10:53</small>
                        <a href="#"><img src="https://picsum.photos/446/240?random=8" alt=""></a>
                    </div>
                    <div class="video-info">
                        <a href="#" class="title">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                            چاپ </a>
                        <a class="channel-name" href="#">مهرداد سامی<span>
                                <i class="fa fa-check-circle"></i></span></a>
                        <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
                        <span class="date"><i class="fa fa-clock-o"></i>5 ماه پیش </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="video-item">
                    <div class="thumb">
                        <div class="hover-efect"></div>
                        <small class="time">10:53</small>
                        <a href="#"><img src="https://picsum.photos/446/240?random=6" alt=""></a>
                    </div>
                    <div class="video-info">
                        <a href="#" class="title">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                            چاپ </a>
                        <a class="channel-name" href="#">مهرداد سامی<span>
                                <i class="fa fa-check-circle"></i></span></a>
                        <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
                        <span class="date"><i class="fa fa-clock-o"></i>5 ماه پیش </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="video-item">
                    <div class="thumb">
                        <div class="hover-efect"></div>
                        <small class="time">10:53</small>
                        <a href="#"><img src="https://picsum.photos/446/240?random=6" alt=""></a>
                    </div>
                    <div class="video-info">
                        <a href="#" class="title">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                            چاپ </a>
                        <a class="channel-name" href="#">مهرداد سامی<span>
                                <i class="fa fa-check-circle"></i></span></a>
                        <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
                        <span class="date"><i class="fa fa-clock-o"></i>5 ماه پیش </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="video-item">
                    <div class="thumb">
                        <div class="hover-efect"></div>
                        <small class="time">10:53</small>
                        <a href="#"><img src="https://picsum.photos/446/240?random=6" alt=""></a>
                    </div>
                    <div class="video-info">
                        <a href="#" class="title">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                            چاپ </a>
                        <a class="channel-name" href="#">مهرداد سامی<span>
                                <i class="fa fa-check-circle"></i></span></a>
                        <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
                        <span class="date"><i class="fa fa-clock-o"></i>5 ماه پیش </span>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- // row -->



</div>
</div>
@endsection
