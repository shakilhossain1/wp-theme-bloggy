<?php

setPostViews(get_the_ID());
get_header();

?>
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
    <main class="lg:col-span-4 space-y-4">
        <?php
            while(have_posts()) {
                the_post();

                get_template_part('template-parts/content/single');
            }
        ?>
    </main>
    <aside class="lg:col-span-2 mt-12 space-y-12">
        <?php dynamic_sidebar('primary') ?>
    </aside>
</div>

<?php get_footer(); ?>