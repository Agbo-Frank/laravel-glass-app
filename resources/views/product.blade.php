<x-guest-layout>
    @include("layouts.header")
    @php $location = "product" @endphp
    <x-page-title title="product" :location="$location" />
    <h2>PRODUCT</h2>
    <div class='product-page'>
        <!-- <ProductSlide arrimage={product.image}/> -->
        <div class='text'>
            @php $user_id = Auth::check() ?  Auth::user()->id : null @endphp
            <div>
                <h2>{{ $product['name'] }}</h2>
                <div>
                    <ul class="stars">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star-half"></i></li>
                    </ul>
                    <div><i class="fa fa-heart"></i> Save For Later</div>
                </div>
            </div>
            <div class="desc">
                <h3>Short description </h3>
                <p>{{ $product['description'] }}</p>
            </div>
            <div>
                <div>₦{{ $product['price'] }}</div>
                <div class='buttons'>
                    <button>Buy Now</button>
                    <form method="POST" action="/cart">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product['id'] }}"/>
                        <input type="hidden" name="user_id" value="{{ $user_id }}"/>
                        <input type="hidden" name="quantity" value="1"/>
                        <button type="submit">Add To Cart</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include("layouts.footer")
</x-guest-layout>