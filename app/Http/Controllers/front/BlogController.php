<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('front.blog.blog',compact('posts'));
    }
    public function show(Post $post){
        return view('front.blog.show',compact('post'));
    }
}
