<?php

namespace App\Http\Controllers;

use App\Models\video;
use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Requests\storeRequest;
use App\Http\Requests\updateRequest;

class videoController extends Controller
{
    
    public function index()
    {

        $poplourVideos = video::all()->random(6);
        return view('video.index', compact('poplourVideos'));
    }


    public function create()
    {
        $categorys=category::all();
        return view('video.create',compact('categorys'));
    }


    public function store(storeRequest $request)
    {


        video::create($request->validated());

        return redirect()->route('video.index')->with('success', __('messages.success'));
    }

    public function show(video $video)
    {

        return view('video.show', compact('video'));
    }


    public function edit(Video $video)
    {
        $categorys=category::all();

        return view('video.edit', compact('video'),compact('categorys'));
    }

    public function update(updateRequest $request,video $video)
    {

        $video->update($request->validated());

        return redirect()->route('video.show',$video->slug)->with('Edit', 'بروزر رسانی با موفقیت انجام شد.');
    }
}