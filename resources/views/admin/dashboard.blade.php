@extends('admin.layout.master')
@section('content')
    <div style="border: 2px solid gray; border-radius:10px; width: 100px; text-align: center; color: blue">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" style=" background: none;color: blue;border: none;padding: 0;font: inherit;cursor: pointer;outline: inherit;">
            Log out
            </button>
        </form>
    </div>
@endsection
