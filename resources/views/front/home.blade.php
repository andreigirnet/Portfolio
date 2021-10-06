@extends('layout.master')
@section('content')
    <!--Div created for orange line-->
 <div id="orange_line">

 </div>

  <!--Div for the photo container-->
    <div id="content"; >

            <div id="photo" >
                <img src="{{asset('assets/main_photo/main2.jpg')}}" alt="">
            </div>
            <div id="welcome">
                <div style="display: flex">
                <div style="font-size: 42px; color:#ffb400; line-height: 52px; letter-spacing: .2rem; font-weight: 900">- I'M ANDREI GIRNET.</div><br>
                </div>
                <div id="sequence"></div>
                <p style="color: white; line-height: 45px; font-size: 20px; letter-spacing: .1rem;">I am passionated web developer based in the United Kingdom, specialised on both front end and backend.
                I am a proficient user of languages like: HTML, CSS, PHP, LARAVEL and JAVASCRIPT.  I do enjoy building excellent software that improves the lives of those around me.
                </p>
                <a href="{{route('front.about')}}" style="text-decoration: none;">
                    <div id="button">
                        <div id="overflow"></div>
                        <div style="color: white; margin-left: 30px; ">MORE ABOUT ME</div>
                        <div id="arrow"><img src="{{asset('assets/icons/arrow.png')}}" alt=""></div>
                </div>
                </a>
            </div>

    </div>
@endsection
