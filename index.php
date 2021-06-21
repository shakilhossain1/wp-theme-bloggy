<?php get_header(); ?>
<div id="app" class="lg:grid lg:grid-cols-6 lg:gap-6 lg:max-w-7xl lg:mx-auto px-2">
    <main class="lg:col-span-4 space-y-4">
        <?php
            if (have_posts()) {
                while(have_posts()) {
                    the_post();
                    get_template_part('template-parts/content');
                }
            }
        ?>
    </main>
    <aside class="lg:col-span-2 mt-12 space-y-12">
        <?php dynamic_sidebar('primary') ?>
    </aside>
</div>
<?php get_footer() ?>