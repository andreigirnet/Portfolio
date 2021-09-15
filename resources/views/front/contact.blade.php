@extends('layout.master')
@section('content')
    <div class="wrapper">
        <div>
            <div style=" letter-spacing: .2rem; position: absolute; top: -26px; left: 462px; font-weight: 800; font-size: 155px; color: #222222">Contact</div>
            <div style=" position: absolute; top:52px; left: 620px; display: flex; color: white; font-weight: 800; font-size: 64px;">Get in  <div style="color: #ffb400; font-size: 64px">Touch</div></div>
            <div style="display: flex; margin-top: 220px">
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
                <div id="contact-right" style="margin-top: 40px; margin-left: 50px">
                    <form action="{{route('contact.store')}}" method="POST">
                        @csrf
                        <div style="display: flex">
                            <input class="input" name="name" placeholder="Your name" type="text">
                            <input class="input left" name="email" placeholder="Your email" type="text">
                            <input class="input left" name="subject" placeholder="Your subject" type="text">
                        </div>
                        <textarea name="text" placeholder="Your Message" style=" font-size: 20px;color: white;padding: 15px 15px 15px 15px;margin-top: 40px; width: 633px; background-color: #252525; border: none; outline: none; border-radius: 20px" name="" id="" cols="30" rows="10"></textarea>
                        @if($errors->count() > 0)
                            @foreach ($errors->all() as $error)
                                <div style="width: 633px; display:flex; align-items: center; justify-content: center; margin-top: 10px; border-radius: 15px; height: 60px; background-color: #a72929; color: white""><div>{{ $error }}</div></div>
                            @endforeach
                        @endif
                        @if(session()->has('success'))
                            <div style="width: 633px; display:flex; align-items: center; justify-content: center; margin-top: 10px; border-radius: 15px; height: 60px; background-color: #a7a329; color: white">
                                <div>
                                {{ session()->get('success') }}
                                </div>
                            </div>
                        @endif
                        <button type="submit"  style="background: none; background: none ;color: inherit;border: none;padding: 0;font: inherit;cursor: pointer;outline: inherit; border: none;padding: 0;font: inherit;cursor: pointer;outline: inherit;"><br>
                            <div id="button" >
                                        <div id="overflow"></div>
                                <div style="color: white; margin-left: 30px; ">SEND</div>
                                <div id="arrow"><img src="{{asset('assets/icons/arrow.png')}}" alt=""></div>
                            </div>
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
