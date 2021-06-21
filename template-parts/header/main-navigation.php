<header id="header" class="text-skin-light">
    <nav class="px-3 py-6 flex justify-start items-center lg:max-w-7xl mx-auto">
        <?php bloggy_site_logo(); ?>
        <?php
            wp_nav_menu([
                'theme_location' => 'primary_menu',
                'container_class' => 'nav-menu-container',
                'menu_class'=> 'nav-menu',
            ]);
        ?>
        <div class="flex space-x-3 ml-auto">
            <button x-on:click="searchOpen = true" id="searchButton" type="button" class="bg-skin-primary rounded-full p-2">
                <?= bloggy_get_icon('search'); ?>
            </button>
            <button id="navButton" x-on:click="navOpen = true" class="bg-skin-primary lg:hidden rounded-full p-2" type="button">
                <?= bloggy_get_icon('burger'); ?>
            </button>
        </div>
    </nav>
</header>