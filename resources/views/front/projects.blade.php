@extends('layout.master')
@section('content')
     <div class="wrapper">
        <div>
            <div id="portfolio_works">Works</div>
            <div id="my_portfolio">MY <div id="portfolio_title">Portfolio</div></div>
        </div>
            <div id="grid-project-parent">
                <a style="text-decoration: none" href="https://pizzeriacaruso.md/"> <div class="grid-project-child"><img class="p-img" src="{{asset('assets/portfolio/1.jpg')}}" alt="">
                    <div style="color: white; display: flex; align-items: center; justify-content: center; margin-top:30px; font-size: 23px">Pizza Coruso</div>
                 </div></a>
                <a style="text-decoration: none" href="https://mariontravel.md/"><div class="grid-project-child"><img class="p-img" src="{{asset('assets/portfolio/2.jpg')}}" alt="">
                    <div style="color: white; display: flex; align-items: center; justify-content: center; margin-top:30px; font-size: 23px">Marion Travel</div>
                </div></a>
                <a style="text-decoration: none" href="https://www.termika.md/ro"><div class="grid-project-child"><img class="p-img" src="{{asset('assets/portfolio/3.png')}}" alt="">
                    <div style="color: white; display: flex; align-items: center; justify-content: center; margin-top:30px; font-size: 23px">Termika</div>
                </div></a>
                <a style="text-decoration: none" href="https://usi-glisante.ro/"><div class="grid-project-child"><img class="p-img" src="{{asset('assets/portfolio/4.jpg')}}" alt="">
                    <div style="color: white; display: flex; align-items: center; justify-content: center; margin-top:30px; font-size: 23px">Usi Glisante</div>
                </div></a>
                <a style="text-decoration: none" href="https://newsmoldova.eu/"><div class="grid-project-child"><img class="p-img" src="{{asset('assets/portfolio/5.jpg')}}" alt="">
                    <div style="color: white; display: flex; align-items: center; justify-content: center; margin-top:30px; font-size: 23px">News Moldova</div>
                </div></a>
                <a style="text-decoration: none" href="https://greenshop.md/"><div class="grid-project-child"><img class="p-img" src="{{asset('assets/portfolio/6.jpg')}}" alt="">
                    <div style="color: white; display: flex; align-items: center; justify-content: center; margin-top:30px; font-size: 23px">Green Shop</div>
                </div></a>
             </div>

     </div>

@endsection
