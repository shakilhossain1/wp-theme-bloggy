<article class=" space-y-4 border-b last:border-none border-skin-muted py-4 md:flex md:space-x-4 ">
    <div class=" relative rounded-lg w-full h-60 md:w-64 md:h-48 md:flex-none ">
        <a href="<?php the_permalink(); ?>" class="overflow-hidden absolute inset-0 rounded-lg">
            <img class="thumbnail-effect" src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url(null, 'medium') : bloggy_build_path('imgs/placeholder.png'); ?>" alt="something" />
        </a>
        <span class="inline-block absolute top-4 left-4 post-format-badge">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
        </span>
    </div>
    <div class="space-y-4">
        <a href="<?= get_author_posts_url(get_the_author_ID()); ?>" class="flex items-center space-x-4">
            <div class="post-avatar">
                <img class="thumbnail-effect" src="<?= get_avatar_url(get_the_author_ID()); ?>" alt="<?php the_author() ?>" />
            </div>
            <span class="text-skin-muted text-sm"><?php the_author(); ?> . <?php the_date(); ?>
            </span>
        </a>
        <div class="text-sm text-skin-muted flex space-x-2">
            <a href="#" class="hover:text-skin-primary">Trending</a><a class="hover:text-skin-primary" href="#">Inspiration</a>
        </div>
        <h2 class="post-title">
            <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
        </h2>
        <p class="text-skin-muted">
            <?= get_the_excerpt();; ?>
        </p>
    </div>
</article>