<x-guest-layout>
    @include('layouts.header')

    @php
        $images = array("/image/home-bg-1.png", "/image/home-bg-2.png", "/image/home-bg-3.png");
        $cards = array("/image/banner-1.jpg", "/image/banner-2.jpg", "/image/banner-3.jpg");
    @endphp
    <div class="sliders">
        @foreach ($images as $image) 
        <div class="slider">
            <img src="{{ $image }}" alt='slider'/>
            <div>
                <p>Protect your eyes</p>
                <h1>UPTO 50% OFF</h1>
                <a href="/" class="btn fadeIn">Shop now</a>
            </div>
        </div>
        @endforeach
        <ul class="navs">
            <li id="prev"><i class="fa fa-chevron-left"></i></li>
            <li id="next"><i class="fa fa-chevron-right"></i></li>
        </ul>
    </div>
    <section>
        <div class="cards">
            @foreach($cards as $card)
            <div class="card">
                <img src="{{ $card }}" alt="banner" />
                <div>
                    <p>Protect your eyes</p>
                    <h4>UPTO 50% OFF</h4>
                    <a href="/" class="btn">Shop now</a>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    @include('layouts.footer')
</x-guest-layout>