<x-guest-layout>
    @include("layouts.header")
    <x-page-title title="about us" location="about" />
    <h2>Why Choose Us?</h2>
    <section>
        <div class="about">
            <img src="/image/about-img.jpg" />
            <div>
                <h2>The Best Eye Glasses Sellers</h2>
                <p>
                    Lorem ipsum dolor, sit amet
                    consectetur adipisicing elit. Natus excepturi aliquam eum quaerat! Error 
                    explicabo laboriosam deserunt eveniet nesciunt perspiciatis ex repellendus officia facere, amet 
                    ecessitatibus sequi at laudantium tenetur!
                    Lorem ipsum dolor, sit amet
                    consectetur adipisicing elit. Natus excepturi aliquam eum quaerat! Error 
                    explicabo laboriosam deserunt eveniet nesciunt perspiciatis ex repellendus officia facere, amet 
                    ecessitatibus sequi at laudantium tenetur!
                </p>
                <div class="btn">Read More</div>
            </div>
        </div>
        @php 
            $icons = array(
                array("img" => "/image/icon-2.png", "text" => "Free Shipping"),
                array("img" => "/image/icon-3.png", "text" => "Easy Return"),
                array("img" => "/image/icon-1.png", "text" => "All Sizes"),
                array("img" => "/image/icon-4.png", "text" => "Easy Payment"),
                array("img" => "/image/icon-5.png", "text" => "24/7 support")
            )
        @endphp
        <ul>
            @foreach($icons as $icon)
            <li>
                <img src="{{ $icon['img'] }}" alt="" />
                <p>{{ $icon['text'] }}</p>
            </li>
            @endforeach
        </ul>
    </section>
    @include("layouts.footer")
</x-guest-layout>