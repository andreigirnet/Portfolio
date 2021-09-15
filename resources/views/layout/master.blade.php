
<html>
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/about.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/projects.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/contact.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/blog.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Right Side menu-->
    <div id="app">
        <div id="ham-menu">
            <button class="ham">
                <!-- X and menu icon SVGs from material icons https://material.io/resources/icons/ -->
                <span class="menuIcon material-icons">
          menu
        </span>
                <span class="xIcon material-icons">
          close
        </span>
            </button>
            <ul class="menu">

                <li><a class="menuLink" href="{{route('front.home')}}">HOME</a></li>
                <li><a class="menuLink" href="{{route('front.about')}}">ABOUT</a></li>
                <li><a class="menuLink" href="{{route('front.projects')}}">PORTFOLIO</a></li>
                <li><a class="menuLink" href="{{route('front.contact')}}">CONTACT</a></li>
                <li><a class="menuLink" href="{{route('front.blog')}}">BLOG</a></li>
            </ul>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.0.0/turbolinks.js" integrity="sha512-P3/SDm/poyPMRBbZ4chns8St8nky2t8aeG09fRjunEaKMNEDKjK3BuAstmLKqM7f6L1j0JBYcIRL4h2G6K6Lew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
