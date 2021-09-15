@extends('layout.master')
@section('content')
    <div class="wrapper">
        <div style="padding-bottom: 50px">
        <div style=" letter-spacing: .2rem; position: absolute; top: -26px; left: 474px; font-weight: 800; font-size: 155px; color: #222222">POSTS</div>
        <div style=" position: absolute; top:52px; left: 620px; display: flex; color: white; font-weight: 800; font-size: 64px;">MY <div style="color: #ffb400; font-size: 64px">BLOG</div></div>
        <div id="cards">
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
        </div>
        </div>
    </div>
@endsection
