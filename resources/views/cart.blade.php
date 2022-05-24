<x-guest-layout>
    @include("layouts.header")
    <x-page-title title="cart" location="location" />
    <h2>your product</h2>
    <section>
        <div class="carts">
            @foreach($carts as $cart)
            <div class="cart">
                <form method="POST" action="/cart/{{ $cart['id'] }}">
                    @method('DELETE')
                    @csrf
                    <i 
                    class="fa fa-times"
                    onclick="event.preventDefault(); this.closest('form').submit();"></i>
                </form>
                <div>
                    
                    <div>
                        <strong>{{ $cart["product"]["name"] }}</strong>
                        <div class="quantity-control">
                            <p>Quantity:</p>
                            <input type="text" value="{{ $cart['quantity']}}"/>
                        </div>
                        <p>₦{{ $cart['product']["price"] }}.00</p>
                    </div>
                </div>
            </div>
            @endforeach
            <div class='order-summary'>
                <strong>Order Summary</strong>
                <div>
                    <p>subtotal</p>
                    <p>₦1000</p>
                </div>
                <div>
                    <p>Shipping Fee</p>
                    <p>₦100</p>
                </div>
                <div>
                    <strong>Total</strong>
                    <strong>₦1100</strong>
                </div>
                <button >Checkout Now</button>
            </div>
        </div>
    </section>
    @include("layouts.footer")
</x-guest-layout>