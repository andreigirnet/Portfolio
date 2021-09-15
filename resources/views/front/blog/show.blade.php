@extends('layout.master')
@section('content')
    <div class="wrapper">
        <div style="margin:auto; font-weight: 800;text-align: center;color: #ffb400; font-size: 50px">{{$post->title}}</div>
        <img src="{{asset('storage/'.$post->picture)}}" alt="" style="width: 100%;height: 540px;">
        <div style="color: white; background-color: #141414; padding: 10px 10px 10px 10px; border-radius: 10px">{!!$post->text!!}</div>
    </div>
@endsection
