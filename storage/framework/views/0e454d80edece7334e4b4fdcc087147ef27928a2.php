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
        <div class="flex-1 lg:flex">
            <img src="/images/header6.png" alt="header illustration" style="width: 1400px; height: 580px;">
        </div>

        <!-- <div class="flex-1 flex flex-col justify-between">
            <header class="mt-8 lg:mt-0">
                <div class="space-x-2">
                    <a href="/categories/<?php echo e($post->category->slug); ?>"
                       class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                       style="font-size: 10px"><?php echo e($post->category->name); ?></a>

                </div>

                <div class="mt-4">
                    <h1 class="text-3xl">

                        <a href="/posts/<?php echo e($post->slug); ?>"><?php echo e($post->title); ?></a>

                    </h1>

                    <span class="mt-2 block text-gray-400 text-xs">
                        Published <time><?php echo e($post->created_at->diffForHumans()); ?></time>
                    </span>
                </div>
            </header>

            <div class="text-sm mt-2 space-y-4">

                <?php echo $post->excerpt; ?>


            </div>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                    <div class="ml-3">
                        <h5 class="font-bold">
                        <a href="/?author=<?php echo e($post->author->username); ?>"><?php echo e($post->author->name); ?></a>
                        </h5>
                    </div>
                </div>

                <div class="hidden lg:block">
                    <a href="/posts/<?php echo e($post->slug); ?>"
                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8">Read More</a>
                </div>
            </footer>
        </div> -->
    </div>
</div><?php /**PATH C:\Laravel_Projects\Mutisya_portfolio\resources\views/components/post-featured-card.blade.php ENDPATH**/ ?>