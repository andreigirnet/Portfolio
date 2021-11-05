@extends('layout.master')
@section('content')
    <!--Div created for orange line-->
 <div id="orange_line">

 </div>

  <!--Div for the photo container-->
    <div id="content-home">

            <div id="photo" >
                <img src="{{asset('assets/main_photo/web_main.webp')}}" alt="">
            </div>
            <div id="welcome">
                <div style="display: flex">
                <div id="name" style="">- I'M ANDREI GIRNET.</div><br>
                </div>
                <div id="sequence"></div>
                <p id="description" style="">I am passionated web developer based in the United Kingdom, specialised on both front end and backend.
                I am a proficient user of languages like: HTML, CSS, PHP, LARAVEL and JAVASCRIPT.  I do enjoy building excellent software that improves the lives of those around me.
                </p>
                <div id="px">
                    <a id="link-about" href="{{route('front.about')}}" style="text-decoration: none;">
                        <div id="button-more">
                            <div id="overflow"></div>
                            <div style="color: white; margin-left: 30px; ">MORE ABOUT ME</div>
                            <div id="arrow"><img src="{{asset('assets/icons/arrow.png')}}" alt=""></div>
                     </div>
                    </a>
                </div>
            </div>

        <div id="social-media">
            <a href="https://www.facebook.com/andrei.girnet.1/"><div class="s-icon"><img src="{{asset('assets/social/facebook.png')}}" alt=""></div></a>
            <a href="https://www.instagram.com/girnet.andrei"><div class="s-icon"><img src="{{asset('assets/social/insta.png')}}" alt=""></div></a>
            <a href="https://www.linkedin.com/in/andrei-girnet-8546a6207/"><div class="s-icon"><img src="{{asset('assets/social/linked.png')}}" alt=""></div></a>
        </div>

    </div>

@endsection
