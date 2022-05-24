<?php foreach($attributes->onlyProps(['location']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['location']); ?>
<?php foreach (array_filter((['location']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="title">
    <h2><?php echo e($title); ?></h2>
    <p>
        <a href="/">Home</a>
        <i class="fa fa-angle-double-right" ></i>
        <a href="<?php echo e($location); ?>"><?php echo e($location); ?></a>
    </p>
</div><?php /**PATH C:\Users\JOHNPAUL ANEKE\Laravel\first-laravel-project\resources\views/components/page-title.blade.php ENDPATH**/ ?>