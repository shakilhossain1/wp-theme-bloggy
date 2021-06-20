<?php get_header(); ?>
<div class="mt-4 container mx-auto sm:grid sm:grid-cols-2 sm:gap-4 md:block">
    <?php if (have_posts()) : ?>
        <?php while(have_posts()) : the_post();?>
            <article class=" space-y-4 border-b border-skin-muted py-4 md:flex md:space-x-4 ">
                <div class=" relative rounded-lg w-full h-60 md:w-64 md:h-48 md:flex-none ">
                    <a href="#" class="overflow-hidden absolute inset-0 rounded-lg">
                        <img class="thumbnail-effect" src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url() : bloggy_build_path('imgs/placeholder.png'); ?>" alt="something" />
                    </a>
                    <span class="inline-block absolute top-4 left-4 post-format-badge">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </span>
                </div>
                <div class="space-y-4">
                    <a href="#" class="flex items-center space-x-4">
                        <div class="post-avatar">
                            <img class="thumbnail-effect" src="data:image/jpeg;base64,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" alt="image" />
                        </div>
                        <span class="text-skin-muted text-sm">Shakil Hossain . 29 March 2021
                        </span>
                    </a>
                    <div class="text-sm text-skin-muted flex space-x-2">
                        <a href="#" class="hover:text-skin-primary">Trending</a><a class="hover:text-skin-primary" href="#">Inspiration</a>
                    </div>
                    <h2 class="post-title">
                        <a href="#">5 Easy way you can turn your futere into success</a>
                    </h2>
                    <p class="text-skin-muted">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Reiciendis nihil sint accusamus fugiat sapiente inventore nemo
                        iusto harum debitis ipsam?
                    </p>
                </div>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer() ?>