<?php get_header(); ?>
<div id="breadcrumb" class="md:py-4">
    <div class="lg:max-w-7xl mx-auto px-2 text-skin-muted">
        <a href="#" class="transition duration-200 hover:text-skin-primary">Home</a>
        /
        <a href="#" class="transition duration-200 hover:text-skin-primary">inspiration</a>
        <span class="hidden md:inline-block">
            / 3 ways to make your iphone faster</span>
    </div>
</div>
<div id="app" class="lg:grid lg:grid-cols-6 lg:gap-6 lg:max-w-7xl lg:mx-auto px-2">
    <?php while(have_posts()): the_post() ?>
    <main class="lg:col-span-4">
        <h1 class="text-skin-dark font-semibold text-2xl md:text-4xl">
            <?php the_title(); ?>
        </h1>
        <?php if (has_post_thumbnail()) : ?>
            <!-- <img src="/imgs/editor-lg.jpg" class="rounded-lg" alt="featured image" /> -->
            <?php the_post_thumbnail('post-thumbnail', ['class' => 'rounded-lg']) ?>
        <?php endif; ?>
        <div class="prose prose-xl mt-8">
            <?php the_content(); ?>
        </div>
    </main>
    <?php endwhile; ?>
    <aside class="lg:col-span-2 mt-12 space-y-12">
        <?php dynamic_sidebar('primary') ?>
    </aside>
</div>

<?php get_footer(); ?>