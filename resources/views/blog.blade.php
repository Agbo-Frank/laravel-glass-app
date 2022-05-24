<x-guest-layout>
    @include("layouts.header")
    <x-page-title title="our blogs" location="blogs" />
    <h2>Our Daily post</h2>
    <section>
        @php
            $blogs = array("/image/blog-1.jpg", "/image/blog-2.jpg", "/image/blog-3.jpg", "/image/blog-4.jpg", "/image/blog-5.jpg","/image/blog-6.jpg")
        @endphp
        <div class="blogs">
            @foreach($blogs as $blog)
            <div class="blog">
                <img src="{{ $blog }}" alt="" />
                <div>
                    <div>
                        <strong>Blog Title Goes Here</strong>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus  
                            aperiam.
                        </p>
                        <a to="/" class="btn">Read More</a>
                    </div>
                    <ul>
                        <li><i class="fa fa-clock-o"></i> 21st May, 2021</li>
                        <li><i class="fa fa-clock-o"></i> 21st May, 2021</li>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    @include("layouts.footer")
</x-guest-layout>