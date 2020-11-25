<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Cache;

class BlogController extends Controller
{
    public function index(){
        $blogs = Cache::remember('blogs', 60, function () {
            return Blog::all();
        });
        return view('blog',['blogs'=>$blogs]);
    }
    public function single($title){
        $blog = Cache::remember('blog-'.$title, 60, function () use($title) {
            return Blog::where('title',$title)->first();
        });
        return view('single',['blog'=>$blog]);
    }
}
