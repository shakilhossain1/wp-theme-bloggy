<div id="searchOverlay" x-show="searchOpen" x-transition class="fixed bg-white inset-0 z-20 flex flex-col justify-start py-6 md:py-12 px-6">
    <button @click="searchOpen = false" class="text-2xl text-skin-muted ml-auto">
        <?= bloggy_get_icon('times'); ?>
    </button>
    <div class="md:max-w-[650px] w-full md:mx-auto">
        <form action="#" class="mt-6 text-center">
            <h2 class="text-skin-dark text-2xl font-bold">Press Esc to close</h2>
            <input type="search" placeholder="Type Here.." class="
              mt-4
              border border-skin-muted
              focus:outline-none
              focus:border-skin-primary
              rounded-full
              py-2
              px-4
              w-full
            " />
        </form>
        <div id="searchContent"></div>
    </div>
</div>
