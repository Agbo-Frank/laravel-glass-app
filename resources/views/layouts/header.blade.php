<header>
    <div>
        <img src='/image/icon-1.png' alt="logo" />
    </div>
    <div>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/product">Products</a></li>
            <li class="dropdown"><p>Pages+</p>
                <ul class="dropdownMenu">
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('blogs') }}">blogs</a></li>
                </ul>
            </li>
            <li><a href="/product/create">Upload</a></li>
            @auth
            <li>
            <form method="POST" action="{{ route('logout') }}" style="diplay: block">
                @csrf
                <p onclick="event.preventDefault(); this.closest('form').submit();">Log Out</p>
            </form>
            </li>
            @else
            <li class="dropdown"><p>Account+</p>
                <ul class="dropdownMenu">
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Register</a></li>
                </ul>
            </li>
            @endauth
        </ul>
        <div class="icons">
            <i class="fa fa-bars"></i>
            @auth
            <a href="/cart/{{ Auth::user()->id }}"><i class="fa fa-shopping-cart"></i></a>
            @endauth
            <i class="fa fa-search"></i>
            <!-- <a class={`cartIcon ${user[0]?.isLoggedIn && "active"}`} data-num={cart.length} href={user[0]?.isLoggedIn ?"/cart": "/login"}><i class="fa fa-shopping-cart"></i></a> -->
        </div>
    </div>
</header>
<div class='overlayer'></div>