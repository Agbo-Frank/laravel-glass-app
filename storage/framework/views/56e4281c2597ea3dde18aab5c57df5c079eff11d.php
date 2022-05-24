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
                    <li><a href="<?php echo e(route('about')); ?>">About</a></li>
                    <li><a href="<?php echo e(route('blogs')); ?>">blogs</a></li>
                </ul>
            </li>
            <li><a href="/product/create">Upload</a></li>
            <?php if(auth()->guard()->check()): ?>
            <li>
            <form method="POST" action="<?php echo e(route('logout')); ?>" style="diplay: block">
                <?php echo csrf_field(); ?>
                <p onclick="event.preventDefault(); this.closest('form').submit();">Log Out</p>
            </form>
            </li>
            <?php else: ?>
            <li class="dropdown"><p>Account+</p>
                <ul class="dropdownMenu">
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Register</a></li>
                </ul>
            </li>
            <?php endif; ?>
        </ul>
        <div class="icons">
            <i class="fa fa-bars"></i>
            <?php if(auth()->guard()->check()): ?>
            <a href="/cart/<?php echo e(Auth::user()->id); ?>"><i class="fa fa-shopping-cart"></i></a>
            <?php endif; ?>
            <i class="fa fa-search"></i>
            <!-- <a class={`cartIcon ${user[0]?.isLoggedIn && "active"}`} data-num={cart.length} href={user[0]?.isLoggedIn ?"/cart": "/login"}><i class="fa fa-shopping-cart"></i></a> -->
        </div>
    </div>
</header>
<div class='overlayer'></div><?php /**PATH C:\Users\JOHNPAUL ANEKE\Laravel\first-laravel-project\resources\views/layouts/header.blade.php ENDPATH**/ ?>