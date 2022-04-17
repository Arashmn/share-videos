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
                <form action="{{ route('video.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>@lang('videos.name')</label>
                            <input name="name" type="text" class="form-control" placeholder="{{ __('videos.name') }}">
                        </div>
                        <div class="col-md-6">
                            <label>{{ __('videos.length') }}</label>
                            <input type="text" name="length" class="form-control" placeholder="{{ __('videos.length') }}">
                        </div>
                        <div class="col-md-6">
                            <label>{{ __('videos.slug') }}</label>
                            <input type="text" name="slug" class="form-control" placeholder="{{ __('videos.slug') }}">
                        </div>
                        <div class="col-md-6">
                            <label>{{ __('videos.url') }}</label>
                            <input type="text" name="url" class="form-control" placeholder="{{ __('videos.url') }}">
                        </div>
                        <div class="col-md-6">
                            <label>{{ __('videos.thumbnail') }}</label>
                            <input type="text" name="thumbnail" class="form-control" placeholder="{{ __('videos.thumbnail') }}">
                        </div>
                        <div class="col-md-6">
                            <label>{{ __('videos.categoty') }}</label>
                            <select class="form-control" name="category_id" id="category">
                                @foreach ($categorys as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}
                                    </option>
                                @endforeach


                            </select>
                        </div>
                        <div class="col-md-12">
                            <label>{{ __('videos.description') }}</label>
                            <textarea class="form-control" name="description" rows="4" placeholder="{{ __('videos.description') }}"></textarea>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" id="contact_submit" class="btn btn-dm">{{ __('videos.save') }}</button>
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
