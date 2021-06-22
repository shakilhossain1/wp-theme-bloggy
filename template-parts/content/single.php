<article class="space-y-4">
    <h1 class="text-skin-dark font-semibold text-2xl md:text-4xl">
        <?php the_title(); ?>
    </h1>
    <div class="flex items-center space-x-2 mt-4 text-skin-muted">
        <a href="#" class="group flex items-center space-x-2">
            <img src="<?= get_avatar_url(get_the_author_ID()); ?>" class="rounded-full object-cover" width="40" height="40" alt="" />
            <span class="group-hover:text-skin-primary transition duration-200"><?php the_author(); ?></span>
        </a>
        <span class="text-skin-primary h-1 w-1 bg-skin-primary inline-block rounded-full"></span>
        <span><?php the_date(); ?></span>
    </div>
    <?php if (has_post_thumbnail()) : ?>
        <!-- <img src="/imgs/editor-lg.jpg" class="rounded-lg" alt="featured image" /> -->
        <?php the_post_thumbnail('medium_large', ['class' => 'rounded-lg']) ?>
    <?php endif; ?>
    <div class="prose prose-xl">
        <?php the_content(); ?>
    </div>
    <hr>
    <div class="flex justify-center space-x-2">
        <a href="#" class="inline-block py-1 px-2 rounded-full border-skin-muted text-skin-muted hover:text-skin-primary hover:border-skin-primary transition duration-200">Inspiration</a>
        <a href="#" class="inline-block py-1 px-2 rounded-full border-skin-muted text-skin-muted hover:text-skin-primary hover:border-skin-primary transition duration-200">sports</a>
    </div>
</article>