<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\GuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php
        $images = array("/image/home-bg-1.png", "/image/home-bg-2.png", "/image/home-bg-3.png");
        $cards = array("/image/banner-1.jpg", "/image/banner-2.jpg", "/image/banner-3.jpg");
    ?>
    <div class="sliders">
        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <div class="slider">
            <img src="<?php echo e($image); ?>" alt='slider'/>
            <div>
                <p>Protect your eyes</p>
                <h1>UPTO 50% OFF</h1>
                <a href="/" class="btn fadeIn">Shop now</a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <ul class="navs">
            <li id="prev"><i class="fa fa-chevron-left"></i></li>
            <li id="next"><i class="fa fa-chevron-right"></i></li>
        </ul>
    </div>
    <section>
        <div class="cards">
            <?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card">
                <img src="<?php echo e($card); ?>" alt="banner" />
                <div>
                    <p>Protect your eyes</p>
                    <h4>UPTO 50% OFF</h4>
                    <a href="/" class="btn">Shop now</a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?><?php /**PATH C:\Users\JOHNPAUL ANEKE\Laravel\first-laravel-project\resources\views/home.blade.php ENDPATH**/ ?>