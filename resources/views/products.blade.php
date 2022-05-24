<x-guest-layout>
    @include("layouts.header")
    <div class="products">
        @php $location = "products" @endphp
        <x-page-title title="our products" :location="$location" />
        <h2>OUR PRODUCTS</h2>
        <section>
            <div class="grid">
                @php $user_id = Auth::check() ?  Auth::user()->id : null @endphp
                @foreach($products as $product)
                <div class="product">
                    <div>
                        <form method="POST" action="/cart">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product['id'] }}"/>
                            <input type="hidden" name="user_id" value="{{ $user_id }}"/>
                            <input type="hidden" name="quantity" value="1"/>
                            <i 
                            class="fa fa-cart-arrow-down" 
                            onclick="event.preventDefault(); this.closest('form').submit();"></i>
                        </form>
                        <a href="/product/{{ $product['id'] }}"><i class="fa fa-eye"></i></a>
                        <i class="fa fa-heart"></i>
                    </div>
                    <img src="{{ $product['images'][0] }}" alt="product-image" /> 
                    <div>
                        <strong>{{ $product['name'] }}</strong>
                        <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half"></i></li>
                        </ul>
                        <p>₦{{ $product["price"] }}.00</p>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>
    @include("layouts.footer")
</x-guest-layout>