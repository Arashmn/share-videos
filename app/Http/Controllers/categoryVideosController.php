<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class categoryVideosController extends Controller
{
    public function index(category $category)
    {
        $videos = $category->videos;
        $title = $category->name;
        $description = $category->description;

        return view('index', compact('videos', 'title','description'));
        
    }
}