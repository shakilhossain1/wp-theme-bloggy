<article class="space-y-4">
    <h1 class="text-skin-dark font-semibold text-2xl md:text-4xl">
        <?php the_title(); ?>
    </h1>
    <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('post-thumbnail', ['class' => 'rounded-lg']) ?>
    <?php endif; ?>
    <div class="prose prose-xl mt-8">
        <?php the_content(); ?>
    </div>
</article>