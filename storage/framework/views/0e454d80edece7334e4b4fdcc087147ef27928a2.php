<?php $attributes = $attributes->exceptProps(['post']); ?>
<?php foreach (array_filter((['post']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

 <div
    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class="lg:flex">
        <div class="flex">
            <img src="/images/header6.png" alt="header illustration" style="width: 1800px; height: 570px;">
        </div>
    </div>
</div><?php /**PATH C:\Laravel_Projects\Mutisya_portfolio\resources\views/components/post-featured-card.blade.php ENDPATH**/ ?>