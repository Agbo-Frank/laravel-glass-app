<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\GuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php echo $__env->make("layouts.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php if (isset($component)) { $__componentOriginal85f966f1b5de8551aa930b6f61c6100ede97428e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\PageTitle::class, ['title' => 'cart','location' => 'location'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('page-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\PageTitle::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal85f966f1b5de8551aa930b6f61c6100ede97428e)): ?>
<?php $component = $__componentOriginal85f966f1b5de8551aa930b6f61c6100ede97428e; ?>
<?php unset($__componentOriginal85f966f1b5de8551aa930b6f61c6100ede97428e); ?>
<?php endif; ?>
    <h2>your product</h2>
    <section>
        <div class="carts">
            <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="cart">
                <form method="POST" action="/cart/<?php echo e($cart['id']); ?>">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>
                    <i 
                    class="fa fa-times"
                    onclick="event.preventDefault(); this.closest('form').submit();"></i>
                </form>
                <div>
                    <img src="<?php echo e($cart['product']['images'][0]['path']); ?>"/>
                    <div>
                        <strong><?php echo e($cart["product"]["name"]); ?></strong>
                        <div class="quantity-control">
                            <p>Quantity:</p>
                            <input type="text" value="<?php echo e($cart['quantity']); ?>"/>
                        </div>
                        <p>₦<?php echo e($cart['product']["price"]); ?>.00</p>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
    <?php echo $__env->make("layouts.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?><?php /**PATH C:\Users\JOHNPAUL ANEKE\Laravel\first-laravel-project\resources\views/cart.blade.php ENDPATH**/ ?>