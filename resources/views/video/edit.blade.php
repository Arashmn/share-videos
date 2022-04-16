@extends('master')
@section('content')

    <div id="upload">
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- upload -->
            <div class="col-md-8">
                <h1 class="page-title"><span>آپلود</span> ویدیو</h1>
                <form action="{{ route('video.update',$video->slug) }}" method="POST">
                    @csrf

                    @method('put')
                    <div class="row">
                        <div class="col-md-6">
                            <label>{{ __('videos.name') }} </label>
                            <input name="name" type="text" class="form-control" placeholder="{{ __('videos.name') }}" value="{{ $video->name }}">
                        </div>
                        <div class="col-md-6">
                            <label>مدت زمان</label>
                            <input type="text" name="length" class="form-control" placeholder="مدت زمان" value="{{ $video->length }}"> 
                        </div>
                        <div class="col-md-6">
                            <label>نام یکتا</label>
                            <input type="text" name="slug" class="form-control" placeholder="نام یکتا" value="{{ $video->slug }}">
                        </div>
                        <div class="col-md-6">
                            <label>آدرس ویدیو</label>
                            <input type="text" name="url" class="form-control" placeholder="آدرس ویدیو" value="{{ $video->url }}">
                        </div>
                        <div class="col-md-6">
                            <label>تصویر بند‌انگشتی</label>
                            <input type="text" name="thumbnail" class="form-control" placeholder="تصویر بند انگشتی" value="{{ $video->thumbnail }}">
                        </div>
                        <div class="col-md-6">
                            <label>دسته بندی</label>
                            <select class="form-control" name="category_id" id="category">
                                @foreach ($categorys as $category)
                                    <option value="{{ $category->id }} " {{ $category->id == $video->category_id  ? 'selected' : '' }}>{{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label>توضیحات</label>
                            <textarea class="form-control" name="description" rows="4" placeholder="توضیح"   >{{ $video->description }}</textarea>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" id="contact_submit" class="btn btn-dm">ذخیره</button>
                        </div>
                    </div>
                </form>
            </div><!-- // col-md-8 -->

            <div class="col-md-4">
                <a href="#"><img src="{{ asset('img/upload-adv.png') }}" alt=""></a>
            </div><!-- // col-md-8 -->
            <!-- // upload -->
        </div><!-- // row -->
    </div>
@endsection
