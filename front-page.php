<?php
get_header();
$leatestPosts = new WP_Query([
  'post_type' => 'post',
  'posts_per_page' => 5,
  'order' => 'DESC'
]);

?>
<!-- Showcase section -->
<?php get_template_part('template-parts/front-page-showcase'); ?>
<div id="app" class="mt-12 lg:grid lg:grid-cols-6 lg:gap-6 lg:max-w-7xl lg:mx-auto px-2">
  <main class="lg:col-span-4">
    <section id="editorsPeack">
      <h2 class="text-skin-dark text-2xl font-bold">Editor's Peack</h2>
      <img class="mt-4" src="<?= bloggy_build_path('imgs/wave.svg') ?>" alt="-----" />
      <div class="
              mt-4
              rounded-lg
              border border-skin-muted
              p-4
              sm:grid sm:grid-rows-4 sm:grid-cols-2
              sm:gap-x-6
            ">
        <article class="space-y-4 row-span-4">
          <div class="relative rounded-lg w-full h-60">
            <a href="#sie">
              <div class="overflow-hidden absolute inset-0 rounded-lg">
                <img class="thumbnail-effect" src="<?= bloggy_build_path('imgs/editor-lg.jpg') ?>" alt="something" />
              </div>
            </a>
            <a class="inline-block absolute top-4 left-4 category-badge" href="#">LifeStyle</a>
            <span class="
                    inline-block
                    absolute
                    right-4
                    bottom-0
                    transform
                    translate-y-[50%]
                    post-format-badge
                  ">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
              </svg>
            </span>
          </div>
          <a href="#" class="flex items-center space-x-4">
            <div class="post-avatar">
              <img class="thumbnail-effect" src="<?= bloggy_build_path('imgs/tabs-1.jpg') ?>" alt="image" />
            </div>
            <span class="text-skin-muted text-sm">Shakil Hossain . 29 March 2021
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
          <div class="w-[80px] h-[60px] rounded-lg overflow-hidden flex-none">
            <img class="thumbnail-effect" src="<?= bloggy_build_path('imgs/tabs-2.jpg') ?>" alt="" />
          </div>
          <div>
            <h3 class="post-title post-title--lg">
              3 ways to make your iphone faster
            </h3>
            <span class="text-sm text-skin-muted">29 March 2021</span>
          </div>
        </a>
        <a href="#" class="py-4 flex space-x-4 border-b border-skin-muted">
          <div class="w-[80px] h-[60px] rounded-lg overflow-hidden flex-none">
            <img class="thumbnail-effect" src="<?= bloggy_build_path('imgs/tabs-3.jpg') ?>" alt="" />
          </div>
          <div>
            <h3 class="post-title post-title--lg">
              3 ways to make your iphone faster
            </h3>
            <span class="text-sm text-skin-muted">29 March 2021</span>
          </div>
        </a>
        <a href="#" class="py-4 flex space-x-4 border-b border-skin-muted">
          <div class="w-[80px] h-[60px] rounded-lg overflow-hidden flex-none">
            <img class="thumbnail-effect" src="<?= bloggy_build_path('imgs/tabs-1.jpg') ?>" alt="" />
          </div>
          <div>
            <h3 class="post-title post-title--lg">
              3 ways to make your iphone faster
            </h3>
            <span class="text-sm text-skin-muted">29 March 2021</span>
          </div>
        </a>
        <a href="#" class="py-4 flex space-x-4 border-b border-skin-muted">
          <div class="w-[80px] h-[60px] rounded-lg overflow-hidden flex-none">
            <img class="thumbnail-effect" src="<?= bloggy_build_path('imgs/tabs-4.jpg') ?>" alt="" />
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
      <?php
      $treandingPots = bloggy_popular_posts_query();
      $firstTwotreandingPosts = array_slice($treandingPots->posts, 0, 2);
      $anotherTreandingPosts = array_slice($treandingPots->posts, 2, 10);
      ?>
      <h2 class="text-skin-dark text-2xl font-bold">Trending</h2>
      <img class="mt-4" src="<?= bloggy_build_path('imgs/wave.svg') ?>" alt="-----" />
      <div class="mt-4 rounded-lg border border-skin-muted p-4 sm:grid sm:grid-rows-4 sm:grid-cols-2 sm:gap-x-6 ">
        <?php foreach($firstTwotreandingPosts as $post) : ?>
          <article class="space-y-4 row-span-4 mb-4">
            <div class="relative rounded-lg w-full h-60">
              <a href="<?=get_the_permalink($post); ?>">
                <div class="overflow-hidden absolute inset-0 rounded-lg">
                  <img class="thumbnail-effect" src="<?= has_post_thumbnail($post) ? get_the_post_thumbnail_url($post) : bloggy_build_path('imgs/placeholder.png'); ?>" alt="<?= $post->post_title ?>" />
                </div>
              </a>
              <a class="inline-block absolute top-4 left-4 category-badge" href="#">LifeStyle</a>
              <span class="inline-block absolute right-4 bottom-0 transform translate-y-[50%] post-format-badge ">
                <?= bloggy_get_icon('thumbnail'); ?>
              </span>
            </div>
            <a href="<?= get_author_posts_url($post->post_author); ?>" class="flex items-center space-x-4">
              <div class="post-avatar">
                <img class="thumbnail-effect" src="<?= get_avatar_url($post->post_author) ?>" alt="<?= get_author_name($post->post_author) ?>" />
              </div>
              <span class="text-skin-muted text-sm">
                <?= get_author_name($post->post_author) ?> .
                <?php get_the_date('', $post); ?>
              </span>
            </a>
            <h2 class="post-title">
              <a href="<?= get_the_permalink($post); ?>"><?= $post->post_title; ?></a>
            </h2>
            <p class="text-skin-muted">
              <?= get_the_excerpt($post); ?>
            </p>
          </article>
        <?php endforeach; ?>
        <?php foreach($anotherTreandingPosts as $post) : ?>
          <a href="<?= get_the_permalink($post); ?>" class="py-4 flex space-x-4 border-b border-skin-muted">
            <div class="w-[80px] h-[60px] rounded-lg overflow-hidden flex-none">
              <img
                class="thumbnail-effect"
                src="<?= has_post_thumbnail($post) ? get_the_post_thumbnail_url($post) : bloggy_build_path('imgs/placeholder.png'); ?>"
                alt=""
              />
            </div>
            <div>
              <h3 class="post-title post-title--lg">
                <?= $post->post_title; ?>
              </h3>
              <span class="text-sm text-skin-muted"><?= get_the_date('', $post) ?></span>
            </div>
          </a>
        <?php endforeach; ?>
      </div>
    </section>
    <section id="categorySlider" class="mt-12">
      <h2 class="text-skin-dark text-2xl font-bold">Inspiration</h2>
      <img class="mt-4" src="<?= bloggy_build_path('imgs/wave.svg') ?>" alt="-----" />
      <div class="md:grid md:grid-cols-2 md:gap-6 mt-6 space-y-3 md:space-y-0">
        <div class="
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
              ">
          <div class="z-10">
            <div>
              <a href="#" class="category-badge">inspiration</a>
            </div>
            <h2 class="mt-4 font-bold text-skin-light text-xl md:text-2xl">
              <a href="#">Five Easy way you can turn your future into success</a>
            </h2>
            <div class="mt-6 text-skin-muted">
              Katen Doe . 29 March 2021
            </div>
          </div>
          <a href="#sie">
            <div class="overflow-hidden absolute inset-0 rounded-lg">
              <img class="thumbnail-effect" src="<?= bloggy_build_path('imgs/editor-lg.jpg') ?>" alt="something" />
            </div>
            <div class="
                    bg-gray-800
                    opacity-75
                    absolute
                    inset-0
                    pointer-events-none
                  "></div>
          </a>
        </div>
        <div class="
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
              ">
          <div class="z-10">
            <div>
              <a href="#" class="category-badge">inspiration</a>
            </div>
            <h2 class="mt-4 font-bold text-skin-light text-xl md:text-2xl">
              <a href="#">Five Easy way you can turn your future into success</a>
            </h2>
            <div class="mt-6 text-skin-muted">
              Katen Doe . 29 March 2021
            </div>
          </div>
          <a href="#sie">
            <div class="overflow-hidden absolute inset-0 rounded-lg">
              <img class="thumbnail-effect" src="<?= bloggy_build_path('imgs/featured-lg.jpg') ?>" alt="something" />
            </div>
            <div class="
                    bg-gray-800
                    opacity-75
                    absolute
                    inset-0
                    pointer-events-none
                  "></div>
          </a>
        </div>
      </div>
    </section>
    <section id="leatestPosts" class="mt-12">
      <h2 class="text-skin-dark text-2xl font-bold">Leatest Posts</h2>
      <img class="mt-4" src="<?= bloggy_build_path('imgs/wave.svg') ?>" alt="-----" />
      <div class="mt-4 layout-border sm:grid sm:grid-cols-2 sm:gap-4 md:block">
        <?php
        if ($leatestPosts->have_posts()) {
          while ($leatestPosts->have_posts()) {
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