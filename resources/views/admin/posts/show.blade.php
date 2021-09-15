@extends('admin.layout.master')
@section('content')
    <h1 style="display: flex">Post : <div style="color: #ffb400; margin-left: 20px">{{$post->title}}</div></h1>
    <h2 style="display: flex">Created by:<div style="color: #ffb400; margin-left: 20px">{{$post->created_by}}</div></h2>
    <div>
        <img src="{{asset('storage/'.$post->picture)}}" alt="">
    </div>
    <div>
        <p>{!! $post->text !!}</p>
    </div>
@endsection
