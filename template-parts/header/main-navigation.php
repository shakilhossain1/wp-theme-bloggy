<header id="header" class="text-skin-light">
    <nav class="px-3 py-6 flex justify-between items-center lg:max-w-7xl mx-auto">
        <?php bloggy_site_logo(); ?>
        <div class="flex space-x-3">
            <button x-on:click="searchOpen = true" id="searchButton" type="button" class="bg-skin-primary rounded-full p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-skin-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button>
            <button id="navButton" x-on:click="navOpen = true" class="bg-skin-primary lg:hidden rounded-full p-2" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-skin-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </nav>
</header>