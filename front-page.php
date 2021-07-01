<?php get_header(); ?>
    <!-- Showcase section -->
    <?php get_template_part('template-parts/front-page-showcase'); ?>
    <div
      id="app"
      class="mt-12 lg:grid lg:grid-cols-6 lg:gap-6 lg:max-w-7xl lg:mx-auto px-2"
    >
      <main class="lg:col-span-4">
        <section id="editorsPeack">
          <h2 class="text-skin-dark text-2xl font-bold">Editor's Peack</h2>
          <img class="mt-4" src="<?= bloggy_build_path('imgs/wave.svg') ?>" alt="-----" />
          <div
            class="
              mt-4
              rounded-lg
              border border-skin-muted
              p-4
              sm:grid sm:grid-rows-4 sm:grid-cols-2
              sm:gap-x-6
            "
          >
            <article class="space-y-4 row-span-4">
              <div class="relative rounded-lg w-full h-60">
                <a href="#sie">
                  <div class="overflow-hidden absolute inset-0 rounded-lg">
                    <img
                      class="thumbnail-effect"
                      src="<?= bloggy_build_path('imgs/editor-lg.jpg') ?>"
                      alt="something"
                    />
                  </div>
                </a>
                <a
                  class="inline-block absolute top-4 left-4 category-badge"
                  href="#"
                  >LifeStyle</a
                >
                <span
                  class="
                    inline-block
                    absolute
                    right-4
                    bottom-0
                    transform
                    translate-y-[50%]
                    post-format-badge
                  "
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"
                    />
                  </svg>
                </span>
              </div>
              <a href="#" class="flex items-center space-x-4">
                <div class="post-avatar">
                  <img
                    class="thumbnail-effect"
                    src="<?= bloggy_build_path('imgs/tabs-1.jpg') ?>"
                    alt="image"
                  />
                </div>
                <span class="text-skin-muted text-sm"
                  >Shakil Hossain . 29 March 2021
                </span>
              </a>
              <h2 class="post-title">
                <a href="#">5 Easy way you can turn your futere into success</a>
              </h2>
              <p class="text-skin-muted">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Reiciendis nihil sint accusamus fugiat sapiente inventore nemo
                iusto harum debitis ipsam?
              </p>
            </article>
            <a href="#" class="py-4 flex space-x-4 border-b border-skin-muted">
              <div
                class="w-[80px] h-[60px] rounded-lg overflow-hidden flex-none"
              >
                <img
                  class="thumbnail-effect"
                  src="<?= bloggy_build_path('imgs/tabs-2.jpg') ?>"
                  alt=""
                />
              </div>
              <div>
                <h3 class="post-title post-title--lg">
                  3 ways to make your iphone faster
                </h3>
                <span class="text-sm text-skin-muted">29 March 2021</span>
              </div>
            </a>
            <a href="#" class="py-4 flex space-x-4 border-b border-skin-muted">
              <div
                class="w-[80px] h-[60px] rounded-lg overflow-hidden flex-none"
              >
                <img
                  class="thumbnail-effect"
                  src="<?= bloggy_build_path('imgs/tabs-3.jpg') ?>"
                  alt=""
                />
              </div>
              <div>
                <h3 class="post-title post-title--lg">
                  3 ways to make your iphone faster
                </h3>
                <span class="text-sm text-skin-muted">29 March 2021</span>
              </div>
            </a>
            <a href="#" class="py-4 flex space-x-4 border-b border-skin-muted">
              <div
                class="w-[80px] h-[60px] rounded-lg overflow-hidden flex-none"
              >
                <img
                  class="thumbnail-effect"
                  src="<?= bloggy_build_path('imgs/tabs-1.jpg') ?>"
                  alt=""
                />
              </div>
              <div>
                <h3 class="post-title post-title--lg">
                  3 ways to make your iphone faster
                </h3>
                <span class="text-sm text-skin-muted">29 March 2021</span>
              </div>
            </a>
            <a href="#" class="py-4 flex space-x-4 border-b border-skin-muted">
              <div
                class="w-[80px] h-[60px] rounded-lg overflow-hidden flex-none"
              >
                <img
                  class="thumbnail-effect"
                  src="<?= bloggy_build_path('imgs/tabs-4.jpg') ?>"
                  alt=""
                />
              </div>
              <div>
                <h3 class="post-title post-title--lg">
                  3 ways to make your iphone faster
                </h3>
                <span class="text-sm text-skin-muted">29 March 2021</span>
              </div>
            </a>
          </div>
        </section>
        <section id="treandingProduct" class="mt-12">
          <h2 class="text-skin-dark text-2xl font-bold">Trending</h2>
          <img class="mt-4" src="<?= bloggy_build_path('imgs/wave.svg') ?>" alt="-----" />
          <div
            class="
              mt-4
              rounded-lg
              border border-skin-muted
              p-4
              sm:grid sm:grid-rows-4 sm:grid-cols-2
              sm:gap-x-6
            "
          >
            <article class="space-y-4 row-span-4 mb-4">
              <div class="relative rounded-lg w-full h-60">
                <a href="#sie">
                  <div class="overflow-hidden absolute inset-0 rounded-lg">
                    <img
                      class="thumbnail-effect"
                      src="<?= bloggy_build_path('imgs/editor-lg.jpg') ?>"
                      alt="something"
                    />
                  </div>
                </a>
                <a
                  class="inline-block absolute top-4 left-4 category-badge"
                  href="#"
                  >LifeStyle</a
                >
                <span
                  class="
                    inline-block
                    absolute
                    right-4
                    bottom-0
                    transform
                    translate-y-[50%]
                    post-format-badge
                  "
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"
                    />
                  </svg>
                </span>
              </div>
              <a href="#" class="flex items-center space-x-4">
                <div class="post-avatar">
                  <img
                    class="thumbnail-effect"
                    src="<?= bloggy_build_path('imgs/tabs-1.jpg') ?>"
                    alt="image"
                  />
                </div>
                <span class="text-skin-muted text-sm"
                  >Shakil Hossain . 29 March 2021
                </span>
              </a>
              <h2 class="post-title">
                <a href="#">5 Easy way you can turn your futere into success</a>
              </h2>
              <p class="text-skin-muted">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Reiciendis nihil sint accusamus fugiat sapiente inventore nemo
                iusto harum debitis ipsam?
              </p>
            </article>
            <article class="space-y-4 row-span-4 mb-4">
              <div class="relative rounded-lg w-full h-60">
                <a href="#sie">
                  <div class="overflow-hidden absolute inset-0 rounded-lg">
                    <img
                      class="thumbnail-effect"
                      src="<?= bloggy_build_path('imgs/editor-lg.jpg') ?>"
                      alt="something"
                    />
                  </div>
                </a>
                <a
                  class="inline-block absolute top-4 left-4 category-badge"
                  href="#"
                  >LifeStyle</a
                >
                <span
                  class="
                    inline-block
                    absolute
                    right-4
                    bottom-0
                    transform
                    translate-y-[50%]
                    post-format-badge
                  "
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"
                    />
                  </svg>
                </span>
              </div>
              <a href="#" class="flex items-center space-x-4">
                <div class="post-avatar">
                  <img
                    class="thumbnail-effect"
                    src="<?= bloggy_build_path('imgs/tabs-2.jpg') ?>"
                    alt="image"
                  />
                </div>
                <span class="text-skin-muted text-sm"
                  >Shakil Hossain . 29 March 2021
                </span>
              </a>
              <h2 class="post-title">
                <a href="#">5 Easy way you can turn your futere into success</a>
              </h2>
              <p class="text-skin-muted">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Reiciendis nihil sint accusamus fugiat sapiente inventore nemo
                iusto harum debitis ipsam?
              </p>
            </article>
            <a href="#" class="py-4 flex space-x-4 border-b border-skin-muted">
              <div
                class="w-[80px] h-[60px] rounded-lg overflow-hidden flex-none"
              >
                <img
                  class="thumbnail-effect"
                  src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQH/2wBDAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQH/wAARCAA8ADwDASIAAhEBAxEB/8QAHgAAAgEEAwEAAAAAAAAAAAAAAwcEAgUGCAABCQr/xAA6EAABAgMGBAIHBQkAAAAAAAABAgMEBREABhIhMUEHCFFhkfATcYGhscHRCSIjMuEUFhhCUlaWstP/xAAaAQADAAMBAAAAAAAAAAAAAAABAgMABAUG/8QANBEAAgECBQEGBAMJAAAAAAAAAQIDBBEABRIhMUETIlFhgcFxkbHwFCOhBjNSVGJk0eHx/9oADAMBAAIRAxEAPwD7AG2FLAJJSCKnLXtXPt8q2nNtBAolPtoBplrYqUaV02H181scIJ7eu3lVQLso9z6nHoiWc3O/6AewwD0Z3I+P0tWEDoSfb8rHCANc/PT61tWBT3++1AjHpb44HdHLD056bb2HXztiNgB/lOfr+VqS2O47ec7S7dEA6gWPZnxH6+nTAun8X08vPxv49MQFtBWShiGdPPW0VUKkmoUUjpSvztdijp4WGU5mqRXuBn3+XsspUjocMCw4J6Hbx99+nl5YrAAGJWmw6+enjay3hvPI7qwTEwn8wbl8PFRjEug0Ft6Ii4+YRRIhoGAgoVp6Ljox7CtTcLCMuvFDbjhSG2nFJvyBjXQj7qa5dc6fDTpbXbjA9GRnEzhtde7UQ/CcRJtw45gprw0i4huFcu5LL4ym7F15ZLJvPA6VRIXAvXmQiD/ZWXUqYiZkl8CrQW7nQndHeLIi7artI6ouwK6jdhYalB41KNxMMGbckIAWYg6TpRSx7xB0gBbXs1hckNxhzN3mS4kLRdq+S0KAUlRu1MG8STocDqEOprrRaEqGdQKUBReTY3bvcOxu7GnxoD7zvlbyo+yT4MfaU8Lozj5Ec83EqYXml94b2QMfcCEnU8h71xUOluJjVThyWONoh0SeUx7LkMmGgWzEQ8GG2xCqe/FVb2zbC0thLqw64PzOABNczoBsAQK5VpUips0NLVSqGefs2uwIEAZCFK2Ks7RyEMCbaoxYhrEgKzSmqaeJiEh1iykXlKuCQCQwQSICP6ZG2I4N1VSfvIn+3b2f43MP+duN3olhiIeGjIabSl2LdSxCmbyiYS5mIfWaIZbiX2EwxeWcm2lPJccUQltKlEAuJKNyBmNCPj7KfCy84sxsvlXDu9UzmLDz0LLpYuNWmEQ0qKSqHdacachg6pDfpm3g243iUkYkjOxnpp6eGWdqqNlgieVg9PpUrGpdrsst1uFPeswW4OlrWORTRzSRxCnYNK6RqVmuQzkKDZo7HvHju33F1uCKigjMZj3+e9h0B1APstMwUbQsEkKSk50qKgEaZb+dgKbBNa07Co+BFjzgqxHO4/57XxQwRmN6/Dz7jbXy+DDi+a7lniAn8Fm4vMU0tWIVDkQxwoU0nD+Y4kw7xJGScICiCpNX0lYqCDmPHbX6jffogb1RTp5sOWqGxAMuXA5in3EBIJU7Do4RNtLCjmnCiJfThFEqx1VmhNkbmIj+Ypfl+Ji9sMFI7Tw7Gffp+5kxuPhJzofr6utrROZ3LZBBOx0yiAyy3gSEJBW+6466hlpphhNXHXHHXENpShJ+8oVoKm15xnYCm3q8baU80vD3jffB8HhW3ARcNHSRcE8iKmcPLHZfHtPOrL2KKcQH2olhxCYUME4H0xBiUqSYZTcv2nzWvybKZq3LMqmzisWSKNKOnLmS0rhDMVjjlkdISys6IlypLFkRWcPkGWUOaZnDSV+ZQ5VTMkkjVcwQJeNdYi1O8aI0gBCs7WB2AZiqHdNt5taEKaWhxCwlSXEKC0qSoA4klJIIOxBII0rWyh4/Lpwev+QSCZC6EkagqeYQCO4KhTvS2TcPZfOpRca6UqvExLoWey67spgZtDylTjktaj4aBZZikQbj1XHGQ6lQStROI1UCQQbYbzAqUODV/glRSTJglKgASlS42ESk0UFA0JqAQQTqCLWraiSXJKuaSMwvLlk0rxNcNEz0jM0bBgp1IxKkEAkgggHYQpY1jzWmiV1lSPMIUWRSCsirUqodSCRpcAMLMRY8nnGdApEO3XdtFNKk4RTbxNLR7DQ5+C0VqyDaP9RXTztYZcWTVIFNu/jYjgfAfTGWJ4F8Y81GZCpyGXQj4HIdzr6rIq8byXObjlp1JTw45kVbbK4MjKhz1OtNfButqOFKtyM+lkfOSf4vOW4bDhjzJqp3D3BSn09Vaa20VmDPCLWP4im+FxURH2xvyRaY5WB2EM23xicc/XG8ZWeoHnvWw1LAFSQaUpoc65dfE2BiK9aabZbnetduvW3SDUEnrTz47ZdrdouTzz6+5IPqNumOGq33v97f7wT0igdQRQmmVa50ypmK0/WyU5iXCOC1/SSoYpUwj7qilQDkygUGikkKSc8lJIUk0IoRk5VkgimWWu++/SyO5jlFPBW/agcxL4AZ55Gcy0HXsTbnZq5GW145vRVfPX8h+d/ljpZfGorqJv7qnOw4/NTz/wAXxnaFD0aDWoCU6moGQyzr79dKdei529/6aeaWiFaktNkf0J9mSdPG1vXEOV1By3r372AZiBvbYcbdPv7tiiqL2UAdTffw8R8vXfH/2Q=="
                  alt=""
                />
              </div>
              <div>
                <h3 class="post-title post-title--lg">
                  3 ways to make your iphone faster
                </h3>
                <span class="text-sm text-skin-muted">29 March 2021</span>
              </div>
            </a>
            <a href="#" class="py-4 flex space-x-4 border-b border-skin-muted">
              <div
                class="w-[80px] h-[60px] rounded-lg overflow-hidden flex-none"
              >
                <img
                  class="thumbnail-effect"
                  src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQH/2wBDAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQH/wAARCAA8ADwDASIAAhEBAxEB/8QAHgAAAgEEAwEAAAAAAAAAAAAAAwcEAgUGCAABCQr/xAA6EAABAgMGBAIHBQkAAAAAAAABAgMEBREABhIhMUEHCFFhkfATcYGhscHRCSIjMuEUFhhCUlaWstP/xAAaAQADAAMBAAAAAAAAAAAAAAABAgMABAUG/8QANBEAAgECBQEGBAMJAAAAAAAAAQIDBBEABRIhMUETIlFhgcFxkbHwFCOhBjNSVGJk0eHx/9oADAMBAAIRAxEAPwD7AG2FLAJJSCKnLXtXPt8q2nNtBAolPtoBplrYqUaV02H181scIJ7eu3lVQLso9z6nHoiWc3O/6AewwD0Z3I+P0tWEDoSfb8rHCANc/PT61tWBT3++1AjHpb44HdHLD056bb2HXztiNgB/lOfr+VqS2O47ec7S7dEA6gWPZnxH6+nTAun8X08vPxv49MQFtBWShiGdPPW0VUKkmoUUjpSvztdijp4WGU5mqRXuBn3+XsspUjocMCw4J6Hbx99+nl5YrAAGJWmw6+enjay3hvPI7qwTEwn8wbl8PFRjEug0Ft6Ii4+YRRIhoGAgoVp6Ljox7CtTcLCMuvFDbjhSG2nFJvyBjXQj7qa5dc6fDTpbXbjA9GRnEzhtde7UQ/CcRJtw45gprw0i4huFcu5LL4ym7F15ZLJvPA6VRIXAvXmQiD/ZWXUqYiZkl8CrQW7nQndHeLIi7artI6ouwK6jdhYalB41KNxMMGbckIAWYg6TpRSx7xB0gBbXs1hckNxhzN3mS4kLRdq+S0KAUlRu1MG8STocDqEOprrRaEqGdQKUBReTY3bvcOxu7GnxoD7zvlbyo+yT4MfaU8Lozj5Ec83EqYXml94b2QMfcCEnU8h71xUOluJjVThyWONoh0SeUx7LkMmGgWzEQ8GG2xCqe/FVb2zbC0thLqw64PzOABNczoBsAQK5VpUips0NLVSqGefs2uwIEAZCFK2Ks7RyEMCbaoxYhrEgKzSmqaeJiEh1iykXlKuCQCQwQSICP6ZG2I4N1VSfvIn+3b2f43MP+duN3olhiIeGjIabSl2LdSxCmbyiYS5mIfWaIZbiX2EwxeWcm2lPJccUQltKlEAuJKNyBmNCPj7KfCy84sxsvlXDu9UzmLDz0LLpYuNWmEQ0qKSqHdacachg6pDfpm3g243iUkYkjOxnpp6eGWdqqNlgieVg9PpUrGpdrsst1uFPeswW4OlrWORTRzSRxCnYNK6RqVmuQzkKDZo7HvHju33F1uCKigjMZj3+e9h0B1APstMwUbQsEkKSk50qKgEaZb+dgKbBNa07Co+BFjzgqxHO4/57XxQwRmN6/Dz7jbXy+DDi+a7lniAn8Fm4vMU0tWIVDkQxwoU0nD+Y4kw7xJGScICiCpNX0lYqCDmPHbX6jffogb1RTp5sOWqGxAMuXA5in3EBIJU7Do4RNtLCjmnCiJfThFEqx1VmhNkbmIj+Ypfl+Ji9sMFI7Tw7Gffp+5kxuPhJzofr6utrROZ3LZBBOx0yiAyy3gSEJBW+6466hlpphhNXHXHHXENpShJ+8oVoKm15xnYCm3q8baU80vD3jffB8HhW3ARcNHSRcE8iKmcPLHZfHtPOrL2KKcQH2olhxCYUME4H0xBiUqSYZTcv2nzWvybKZq3LMqmzisWSKNKOnLmS0rhDMVjjlkdISys6IlypLFkRWcPkGWUOaZnDSV+ZQ5VTMkkjVcwQJeNdYi1O8aI0gBCs7WB2AZiqHdNt5taEKaWhxCwlSXEKC0qSoA4klJIIOxBII0rWyh4/Lpwev+QSCZC6EkagqeYQCO4KhTvS2TcPZfOpRca6UqvExLoWey67spgZtDylTjktaj4aBZZikQbj1XHGQ6lQStROI1UCQQbYbzAqUODV/glRSTJglKgASlS42ESk0UFA0JqAQQTqCLWraiSXJKuaSMwvLlk0rxNcNEz0jM0bBgp1IxKkEAkgggHYQpY1jzWmiV1lSPMIUWRSCsirUqodSCRpcAMLMRY8nnGdApEO3XdtFNKk4RTbxNLR7DQ5+C0VqyDaP9RXTztYZcWTVIFNu/jYjgfAfTGWJ4F8Y81GZCpyGXQj4HIdzr6rIq8byXObjlp1JTw45kVbbK4MjKhz1OtNfButqOFKtyM+lkfOSf4vOW4bDhjzJqp3D3BSn09Vaa20VmDPCLWP4im+FxURH2xvyRaY5WB2EM23xicc/XG8ZWeoHnvWw1LAFSQaUpoc65dfE2BiK9aabZbnetduvW3SDUEnrTz47ZdrdouTzz6+5IPqNumOGq33v97f7wT0igdQRQmmVa50ypmK0/WyU5iXCOC1/SSoYpUwj7qilQDkygUGikkKSc8lJIUk0IoRk5VkgimWWu++/SyO5jlFPBW/agcxL4AZ55Gcy0HXsTbnZq5GW145vRVfPX8h+d/ljpZfGorqJv7qnOw4/NTz/wAXxnaFD0aDWoCU6moGQyzr79dKdei529/6aeaWiFaktNkf0J9mSdPG1vXEOV1By3r372AZiBvbYcbdPv7tiiqL2UAdTffw8R8vXfH/2Q=="
                  alt=""
                />
              </div>
              <div>
                <h3 class="post-title post-title--lg">
                  3 ways to make your iphone faster
                </h3>
                <span class="text-sm text-skin-muted">29 March 2021</span>
              </div>
            </a>
            <a href="#" class="py-4 flex space-x-4 border-b border-skin-muted">
              <div
                class="w-[80px] h-[60px] rounded-lg overflow-hidden flex-none"
              >
                <img
                  class="thumbnail-effect"
                  src="data:image/jpeg;base64,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"
                  alt=""
                />
              </div>
              <div>
                <h3 class="post-title post-title--lg">
                  3 ways to make your iphone faster
                </h3>
                <span class="text-sm text-skin-muted">29 March 2021</span>
              </div>
            </a>
            <a href="#" class="py-4 flex space-x-4 border-b border-skin-muted">
              <div
                class="w-[80px] h-[60px] rounded-lg overflow-hidden flex-none"
              >
                <img
                  class="thumbnail-effect"
                  src="data:image/jpeg;base64,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"
                  alt=""
                />
              </div>
              <div>
                <h3 class="post-title post-title--lg">
                  3 ways to make your iphone faster
                </h3>
                <span class="text-sm text-skin-muted">29 March 2021</span>
              </div>
            </a>
          </div>
        </section>
        <section id="categorySlider" class="mt-12">
          <h2 class="text-skin-dark text-2xl font-bold">Inspiration</h2>
          <img class="mt-4" src="<?= bloggy_build_path('imgs/wave.svg') ?>" alt="-----" />
          <div
            class="md:grid md:grid-cols-2 md:gap-6 mt-6 space-y-3 md:space-y-0"
          >
            <div
              class="
                showcase
                relative
                overflow-hidden
                shadow-md
                rounded-xl
                flex flex-col
                justify-end
                pb-12
                px-4
                h-80
                w-full
                md:px-8
              "
            >
              <div class="z-10">
                <div>
                  <a href="#" class="category-badge">inspiration</a>
                </div>
                <h2 class="mt-4 font-bold text-skin-light text-xl md:text-2xl">
                  <a href="#"
                    >Five Easy way you can turn your future into success</a
                  >
                </h2>
                <div class="mt-6 text-skin-muted">
                  Katen Doe . 29 March 2021
                </div>
              </div>
              <a href="#sie">
                <div class="overflow-hidden absolute inset-0 rounded-lg">
                  <img
                    class="thumbnail-effect"
                    src="<?= bloggy_build_path('imgs/editor-lg.jpg') ?>"
                    alt="something"
                  />
                </div>
                <div
                  class="
                    bg-gray-800
                    opacity-75
                    absolute
                    inset-0
                    pointer-events-none
                  "
                ></div>
              </a>
            </div>
            <div
              class="
                showcase
                relative
                overflow-hidden
                shadow-md
                rounded-xl
                flex flex-col
                justify-end
                pb-12
                px-4
                h-80
                w-full
                md:px-8
              "
            >
              <div class="z-10">
                <div>
                  <a href="#" class="category-badge">inspiration</a>
                </div>
                <h2 class="mt-4 font-bold text-skin-light text-xl md:text-2xl">
                  <a href="#"
                    >Five Easy way you can turn your future into success</a
                  >
                </h2>
                <div class="mt-6 text-skin-muted">
                  Katen Doe . 29 March 2021
                </div>
              </div>
              <a href="#sie">
                <div class="overflow-hidden absolute inset-0 rounded-lg">
                  <img
                    class="thumbnail-effect"
                    src="<?= bloggy_build_path('imgs/featured-lg.jpg') ?>"
                    alt="something"
                  />
                </div>
                <div
                  class="
                    bg-gray-800
                    opacity-75
                    absolute
                    inset-0
                    pointer-events-none
                  "
                ></div>
              </a>
            </div>
          </div>
        </section>
        <section id="leatestPosts" class="mt-12">
          <?php
            $leatestPosts = new WP_Query([
              'post_type' => 'post',
              'posts_per_page' => 5,
              'order' => 'DESC'
            ])
          ?>
          <h2 class="text-skin-dark text-2xl font-bold">Leatest Posts</h2>
          <img class="mt-4" src="<?= bloggy_build_path('imgs/wave.svg') ?>" alt="-----" />
          <div
            class="mt-4 layout-border sm:grid sm:grid-cols-2 sm:gap-4 md:block"
          >
            <?php
              if ($leatestPosts->have_posts())  {
                  while($leatestPosts->have_posts()) {
                    $leatestPosts->the_post();
                    get_template_part('template-parts/content');
                  }
              }
            ?>
          </div>
        </section>
      </main>
      <aside class="lg:col-span-2 mt-12 space-y-12">
          <?php
            dynamic_sidebar('primary');
          ?>
      </aside>
    </div>
<?php get_footer(); ?>