<div id="searchOverlay" x-show="searchOpen" x-transition class="fixed bg-white inset-0 z-20 flex flex-col justify-start py-6 md:py-12 px-6">
    <button @click="searchOpen = false" class="text-2xl text-skin-muted ml-auto">
        <?= bloggy_get_icon('times'); ?>
    </button>
    <div x-data="searchForm" class="md:max-w-[650px] w-full md:mx-auto">
        <form action="#" class="mt-6 text-center">
            <h2 class="text-skin-dark text-2xl font-bold">Press Esc to close</h2>
            <input type="search" x-model="search" name="q" placeholder="Type Here.." class=" mt-4 border border-skin-muted focus:outline-none focus:border-skin-primary rounded-full py-2 px-4 w-full " />
        </form>
        <template x-if="!isPostAvailable && !isLoading">
            <div class="flex justify-center mt-10 text-skin-muted text-lg font-semibold">Nothing to show</div>
        </template>
        <template x-if="isLoading">
            <div class="flex justify-center mt-10 text-skin-muted text-lg font-semibold animate-pulse">Loading...</div>
        </template>
        <div x-show="isPostAvailable && !isLoading" x-transition>
            <ul id="searchContent" class="mt-4">
                <template x-for="post in posts" :key="post.id">
                    <li class="border-b border-skin-muted">
                        <a :href="post.permalink" class="py-4 flex space-x-4">
                            <div class="w-[60px] h-[60px] rounded-full overflow-hidden flex-none">
                                <img class="thumbnail-effect" :src="post.image ? post.image : themedata.asset_path + '/imgs/placeholder.png'" alt="" />
                            </div>
                            <div>
                                <h3 x-text="post.title" class="post-title post-title--lg"></h3>
                                <span x-text="post.date" class="text-sm text-skin-muted"></span>
                            </div>
                        </a>
                    </li>
                </template>
            </ul>
        </div>
    </div>
</div>