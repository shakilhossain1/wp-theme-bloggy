<?php
require get_template_directory() . '/inc/Bloggy_Mobile_Nav_Walker.php';
?>
<div x-show="navOpen" class="fixed bg-gray-300 bg-opacity-90 inset-0 z-10" id="navOverlay"></div>
<div id="mobileNav" x-show="navOpen" x-transition @click.away="closeNav" class="fixed right-0 top-0 z-50 min-h-full w-5/6 ml-auto bg-white shadow-md px-8 max-w-[300px] flex flex-col justify-start py-10">
    <header class="flex items-center justify-between mb-6">
        <?php
        bloggy_site_logo();
        ?>
        <button @click="closeNav" class="text-2xl text-skin-muted">
            <?= bloggy_get_icon('times'); ?>
        </button>
    </header>
    <?php
    wp_nav_menu([
        'theme_location' => 'primary_menu',
        'container_class' => 'mobile-menu-container',
        'menu_class' => 'mobile-menu',
        'walker' => new Bloggy_Mobile_Nav_Walker()
    ]);
    ?>
    <footer class="mt-auto">bottom</footer>
</div>