@extends('auth-layout')
@section('class-body', 'sing-up-page')
@section('content')

    <!--======= log_in_page =======-->
    <div id="log-in" class="site-form log-in-form">

        <div id="log-in-head">
            <h1>ثبت نام</h1>
            <div id="logo"><a href="01-home.html"><img src="img/logo.png" alt=""></a></div>
        </div>
           <x-validation></x-validation>
        <div class="form-output">
            <form action="{{ route('register.store') }}" method="POST">
                @csrf

                <div class="form-group label-floating">
                    <label class="control-label">نام</label>
                    <input class="form-control" placeholder="" name="name" >
                </div>

                <div class="form-group label-floating">
                    <label class="control-label">ایمیل</label>
                    <input class="form-control" placeholder="" name="email" type="email">
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">رمز عبور</label>
                    <input class="form-control" placeholder="" name="password"   type="password">
                </div>

                <div class="form-group label-floating">
                    <label class="control-label">تأیید رمز عبور</label>
                    <input name="password_confirmation" class="form-control" placeholder="" type="password">
                </div>


                <div class="remember">
                    <div class="checkbox">
                        <label>
                            <input name="optionsCheckboxes" type="checkbox">
                            <a href="#">شرایط و ضوابط</a> سایت را قبول میکنم
                        </label>
                    </div>
                </div>


                <button type="submit" class="btn btn-lg btn-primary full-width">ثبت نام</button>



                <p>شما یک حساب کاربری دارید؟ <a href="{{ route('login') }}"> ورود!</a> </p>
            </form>
        </div>
    </div>
    <!--======= // log_in_page =======-->

@endsection
