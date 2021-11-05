@extends('layout.master')
@section('content')
    <div class="wrapper">
        <div>
            <div id="contact_header">Contact</div>
            <div id="get_in">Get in  <div id="touch" style="">Touch</div></div>
            <div id="contact_wrap">
                <div id="contact-left">
                    <h1 style="color: white; letter-spacing: .1rem; margin-left: 5px">Don't be shy !</h1>
                    <div style="font-size: 16px" class="white_text">Feel free to get in touch with me. I am always open to discussing new projects, creative ideas or opportunities to be part of your visions.</div>
                    <div id="mail" style="margin-top: 40px; margin-left: 5px;">
                        <div style="display: flex">
                        <img src="{{asset('assets/icons/mail.png')}}" alt="">
                            <div style="margin-left: 15px">
                                <div style="color: white">MAIL ME</div>
                                <div style="color:  #ffb400; margin-top: 5px">andrei.girnet96@gmail.com</div>
                            </div>
                        </div>
                    </div>
                    <div id="call" style="margin-top: 40px; margin-left: 5px;">
                        <div style="display: flex">
                            <img src="{{asset('assets/icons/phone.png')}}" alt="">
                            <div style="margin-left: 15px">
                                <div style="color: white">CALL ME</div>
                                <div style="color:  #ffb400; margin-top: 5px">+447365365156</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="contact-right">
                    <form action="{{route('contact.store')}}" method="POST">
                        @csrf
                        <div id="form-flex">
                            <input class="input" name="name" placeholder="Your name" type="text">
                            <input class="input left" name="email" placeholder="Your email" type="text">
                            <input class="input left" name="subject" placeholder="Your subject" type="text">
                        </div>
                        <textarea name="text" id="textarea" placeholder="Your Message" style=" " name="" id="" cols="30" rows="10"></textarea>
                        @if($errors->count() > 0)
                            @foreach ($errors->all() as $error)
                                <div id="error_red"><div>{{ $error }}</div></div>
                            @endforeach
                        @endif
                        @if(session()->has('success'))
                            <div id="success_green" >
                                <div>
                                {{ session()->get('success') }}
                                </div>
                            </div>
                        @endif
                        <button id="" type="submit"  style="background: none; background: none ;color: inherit;border: none;padding: 0;font: inherit;cursor: pointer;outline: inherit; border: none;padding: 0;font: inherit;cursor: pointer;outline: inherit;"><br>
                            <div id="btn-sb" >
                                        <div id="btn_over"></div>
                                <div style="color: white; margin-left: 30px; ">SEND</div>
                                <div id="btn_arrow"><img src="{{asset('assets/icons/arrow.png')}}" alt=""></div>
                            </div>
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
