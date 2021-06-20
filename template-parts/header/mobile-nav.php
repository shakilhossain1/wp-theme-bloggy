    <div x-show="navOpen" class="fixed bg-gray-300 bg-opacity-90 inset-0 z-10" id="navOverlay"></div>
    <div id="mobileNav" x-show="navOpen" x-transition @click.away="navOpen = false" class="fixed right-0 top-0 z-50 min-h-full w-5/6 ml-auto bg-white shadow-md px-8 max-w-[300px] flex flex-col justify-start py-10">
        <header class="flex items-center justify-between">
            <a href="#">
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                }
                ?>
            </a>
            <button @click="navOpen = false" class="text-2xl text-skin-muted">
                x
            </button>
        </header>
        <ul class="mt-8">
            <li class="py-2 border-b border-skin-muted">
                <a href="#" class="nav-link active">Home</a>
            </li>
            <li class="py-2 border-b border-skin-muted">
                <a href="#" class="nav-link">About</a>
            </li>
            <li class="py-2 border-b border-skin-muted">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>
        <footer class="mt-auto">bottom</footer>
    </div>