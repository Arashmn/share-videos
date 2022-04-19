<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Video Post – Video Sharing HTML Template</title>
    <meta name="keywords" content="Blog website templates" />
    <meta name="description" content="Author - Personal Blog Wordpress Template">
    <meta name="author" content="Rabie Elkheir">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Core CSS -->
    <!-- Owl Carousel Assets -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
        integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <!--Google Fonts-->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800|Raleway:400,500,700|Roboto:300,400,500,700,900|Ubuntu:300,300i,400,400i,500,500i,700"
        rel="stylesheet">
    <!-- Main CSS -->
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('fonts/IRANSansWeb.woff2') }}">
    <link rel="stylesheet" href="{{ asset('main.css') }}">




</head>

<body>
    <!--======= header =======-->
    <header>
        <div class="container-full">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <a id="main-category-toggler" class="hidden-md hidden-lg hidden-md" href="#">
                        <i class="fa fa-navicon"></i>
                    </a>
                    <a id="main-category-toggler-close" class="hidden-md hidden-lg hidden-md" href="#">
                        <i class="fa fa-close"></i>
                    </a>
                    <div id="logo">
                        <a href="01-home.html"><img src="{{ asset('img/logo.png') }}" alt=""></a>
                    </div>
                </div><!-- // col-md-2 -->
                <div class="col-lg-3 col-md-3 col-sm-6 hidden-xs hidden-sm">
                    <div class="search-form">
                        <form id="search" action="#" method="post">
                            <input type="text" placeholder="جستجو ..." />
                            <input type="submit" value="Keywords" />
                        </form>
                    </div>
                </div><!-- // col-md-3 -->
                <div class="col-lg-3 col-md-3 col-sm-5 hidden-xs hidden-sm">
                </div><!-- // col-md-4 -->
                <div class="col-lg-2 col-md-2 col-sm-4 hidden-xs hidden-sm">
                    <!--  -->
                </div>
                @auth
                    <div class="col-lg-2 col-md-2 col-sm-3 hidden-xs hidden-sm">
                        <div class="dropdown">
                            <a data-toggle="dropdown" href="#" class="user-area">
                                <div class="thumb"><img src="" alt="">
                                </div>
                                <h2>{{ auth()->user()->name ?? ''}}</h2>
                                <h3>25 اشتراک</h3>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu account-menu">
                                <li><a href="#"><i class="fa fa-edit color-1"></i>ویرایش پروفایل</a></li>
                                <li><a href="{{ route('video.create') }}"><i class="fa fa-video-camera color-2"></i>اضافه کردن فیلم</a></li>
                                <li><a href="#"><i class="fa fa-star color-3"></i>برگزیده</a></li>
                                <li><a href="{{ route('logout.destroy') }}"><i class="fa fa-sign-out color-4"></i>خروج</a></li>
                            </ul>
                        </div>
                    </div>
                @endauth

                @guest
                        <div class="col-lg-2 col-md-2 col-sm-3 hidden-xs hidden-sm">
                            <a href="{{ route('login') }}" class="btn btn-danger">ورود</a>
                            <a href="{{ route('register.create') }}" class="btn btn-danger">ثبت نام</a>
                        </div>
                @endguest
            </div><!-- // row -->
        </div><!-- // container-full -->
    </header><!-- // header -->

    <div id="main-category">
        <div class="container-full">
            <div class="row">
                <x-slug-Component></x-slug-Component>
            </div><!-- // row -->
        </div><!-- // container-full -->
    </div><!-- // main-category -->

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')
    <script src="{{ asset('main.js') }}"></script>
</body>

</html>
