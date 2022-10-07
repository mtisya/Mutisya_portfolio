<?php $attributes = $attributes->exceptProps(['post']); ?>
<?php foreach (array_filter((['post']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<article
    <?php echo e($attributes->merge(['class' => 'transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl'])); ?>>
    <div class="py-6 px-5 lg:flex-col">
        <div class="flex-1 lg:mr-4">
            <img src="/images/photo3.jpg" alt="Blog Post illustration" class="rounded-xl">
        </div>

        <div class="flex-1 flex flex-col justify-between">
            <header class="mt-8 lg:mt-0">

                <div class="mt-4">
                    <h1 class="text-3xl">

                        <a href="/posts/<?php echo e($post->slug); ?>">PHP Project</a>

                    </h1>

                    <span class="mt-2 block text-gray-400 text-xs">
                        Published <time><?php echo e($post->created_at->diffForHumans()); ?></time>
                    </span>
                </div>
            </header>

            <div class="text-sm mt-2 space-y-4">

                <p>The project implements the turn arround document that involves all the processes within the business<br> Best feature of this project is the dynamic allocation of the unique order number whenever a order is created.<br>The order can be created by both department</p>

            </div>

            <footer class="flex justify-between items-center mt-8">

                <div class="hidden lg:block">
                    <a href="https://www.neumatechengltd.co.ke"
                       class="transition-colors duration-300 text-lg font-semibold bg-blue-200 hover:bg-gray-300 rounded-full py-2 px-8"
                    >Explore More...</a>
                </div>
            </footer>
        </div>
    </div>
</article><?php /**PATH C:\Laravel_Projects\Mutisya_portfolio\resources\views/components/post-card.blade.php ENDPATH**/ ?>