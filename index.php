<?php get_header(); ?>
<div class="mt-4 container mx-auto sm:grid sm:grid-cols-2 sm:gap-4 md:block">
    <?php
        if (have_posts()) {
            while(have_posts()) {
                the_post();

                get_template_part('template-parts/content');
            }
        }
    ?>
</div>
<?php get_footer() ?>