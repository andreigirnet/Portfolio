
<html>
<head>
    <title>Andrei's Girnet Portfolio</title>
    <link rel="shortcut icon" href="{{asset('assets/main_photo/main2.jpg')}}" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/about.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/projects.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/contact.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/blog.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js" integrity="sha512-nIwdJlD5/vHj23CbO2iHCXtsqzdTTx3e3uAmpTm4x2Y8xCIFyWu4cSIV8GaGe2UNVq86/1h9EgUZy7tn243qdA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.15/tailwind.min.css" integrity="sha512-braXHF1tCeb8MzPktmUHhrjZBSZknHvjmkUdkAbeqtIrWwCchhcpUeAf2Sq3yIq1Q1x5PlroafjceOUbIE3Q5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div id="app" x-data="{menuShow: false, info:false}">
    <!-- Right Side menu-->

            <div x-show.transition.1600ms="info" id="drop-info"><div>Dropdown-Menu</div></div>
            <div @mouseover="info=true" @mouseout="info=false" @click = "menuShow = true" class="dropdown_button">
                <img src="{{asset('assets/icons/down.png')}}" alt="">
            </div>

        <div id="ham-menu">
            <div id="menu-center" x-show.transition.1000ms="menuShow">
                <div id="close" @click="menuShow = false">
                    <img src="{{asset('assets/icons/close.png')}}" alt="">
                </div>
                <ul class="menu" >
                    <li><a class="menuLink" href="{{route('front.home')}}">HOME</a></li>
                    <li><a class="menuLink" href="{{route('front.about')}}">ABOUT</a></li>
                    <li><a class="menuLink" href="{{route('front.projects')}}">PORTFOLIO</a></li>
                    <li><a class="menuLink" href="{{route('front.contact')}}">CONTACT</a></li>
                    <li><a class="menuLink" href="{{route('front.blog')}}">BLOG</a></li>
                </ul>
            </div>
        </div>
        <div id="side_menu">

            <div class="menu-parent">
                <div  class="icons"><a href="{{route('front.home')}}"><img  src="{{asset('assets/icons/home.png')}}" alt=""></a></div>
                <div class="menu-over"><div class="text-menu"><div>HOME</div></div></div>
            </div>
            <div class="menu-parent">
                <div class="icons"><a href="{{route('front.about')}}"><img src="{{asset('assets/icons/user.png')}}" alt=""></a></div>
                <div class="menu-over"><div class="text-menu"><div>ABOUT</div></div></div>
            </div>
            <div class="menu-parent">
                <div class="icons"><a href="{{route('front.projects')}}"><img src="{{asset('assets/icons/briefcase.png')}}" alt=""></a></div>
                <div class="menu-over"><div class="text-menu"><div>PORTOFOLIO</div></div></div>
            </div>
            <div class="menu-parent">
                <div class="icons"><a href="{{route('front.contact')}}"><img src="{{asset('assets/icons/mail.png')}}" alt=""></a></div>
                <div class="menu-over"><div class="text-menu"><div>CONTACT</div></div></div>
            </div>
            <div class="menu-parent">
            <div class="icons"><a href="{{route('front.blog')}}"><img src="{{asset('assets/icons/chat.png')}}" alt=""></a></div>
                <div class="menu-over"><div class="text-menu"><div>BLOG</div></div></div>
            </div>
        </div>
    </div>
    @yield('content')
    <script src="{{asset('assets/js/menu.js')}}"></script>
    <script src="{{asset('assets/js/sequence.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.0.0/turbolinks.js" integrity="sha512-P3/SDm/poyPMRBbZ4chns8St8nky2t8aeG09fRjunEaKMNEDKjK3BuAstmLKqM7f6L1j0JBYcIRL4h2G6K6Lew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
