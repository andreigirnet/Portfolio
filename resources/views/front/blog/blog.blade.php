@extends('layout.master')
@section('content')
    <div class="wrapper">
        <div style="padding-bottom: 50px">
        <div id="posts_title">POSTS</div>
        <div id="blog_title">MY <div id="blog-t" style="">BLOG</div></div>
        <div id="cards">
            @if(count($posts)<1)
                <div id="error_blog">
                    <div style="font-size: 30px; color: white">No blogs yet</div>
                </div>
            @else
            @foreach($posts as $post)
                <a style="text-decoration: none" href="{{route('front.blog.show',[$post->id])}}">
                    <div class="card-post">
                        <img src="{{asset('storage/'.$post->picture)}}" alt="">
                        <hr style="height: 8px; background-color: #FFB400; margin-top: -2px;  border:none;">
                        <div class="blog-text">
                            <h1 id="hov" style="    color: white;font-size: 25px;text-align: center;margin-top: 37px;">{{$post->title}}</h1>
                            <div></div>
                        </div>
                    </div>
                </a>
            @endforeach
            @endif
        </div>
        </div>
    </div>
@endsection
