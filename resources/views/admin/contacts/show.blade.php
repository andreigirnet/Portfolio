@extends('admin.layout.master')
@section('content')
        <h1>Message from {{$contact->name}}/ {{$contact->email}}</h1>
        <p>{{$contact->text}}</p>
@endsection
