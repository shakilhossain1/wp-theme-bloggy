<section id="showcase" class="md:grid md:grid-cols-6 lg:max-w-7xl lg:mx-auto">
    <!-- Shocase Left Area -->
    <div class="px-2 md:col-span-4">
        <?php
        $front_post = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => '1'
        ]);
        ?>
        <?php if ($front_post->have_posts()) : ?>
            <?php while ($front_post->have_posts()) : $front_post->the_post(); ?>
                <div style="
                  background-image: linear-gradient(
                      rgba(0, 0, 0, 0.6),
                      rgba(0, 0, 0, 0.6)
                    ),
                    url(<?= has_post_thumbnail() ? get_the_post_thumbnail_url(null, 'medium_large') : bloggy_build_path('imgs/placeholder.png') ?>);
                " class="showcase shadow-md rounded-xl flex flex-col justify-end pb-12 bg-cover bg-center px-4 h-96 md:h-[500px] md:px-8">
                    <div class="posts-categories-minimal"><?php the_category(); ?></div>
                    <h2 class="mt-4 font-bold text-skin-light text-2xl md:text-4xl">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <div class="mt-6 text-skin-muted"><?php the_author(); ?> . <?php the_date(); ?></div>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
        <?php else : ?>
            <p>Add a post First</p>
        <?php endif; wp_reset_query(); ?>
    </div>
    <!-- Showcase Right Area -->
    <div id="showcaseTabs" x-data="{tab: 'popular'}" class="mt-4 mx-2 p-4 rounded-xl border border-skin-muted md:col-span-2 md:mt-0 ">
        <div class="flex space-x-4">
            <button class="tab-btn" @click="tab = 'popular'" :class="{'active': tab === 'popular'}">
                Popular
            </button>
            <button class="tab-btn" @click="tab = 'recent'" :class="{'active': tab === 'recent'}">
                Recent
            </button>
        </div>
        <ul x-show="tab === 'popular'" class="pt-4">
            <?php
                $popular_posts = bloggy_popular_posts_query();

                // query_posts('meta_key=post_views_count&posts_per_page=5&orderby=meta_value_num&
                // order=DESC')
            ?>
            <?php if ($popular_posts->have_posts()) : ?>
                <?php while($popular_posts->have_posts()) : $popular_posts->the_post(); ?>
                    <li class="border-b border-skin-muted">
                        <a href="<?php the_permalink(); ?>" class="py-4 flex space-x-4">
                            <div class="w-[60px] h-[60px] rounded-full overflow-hidden flex-none">
                                <img
                                    class="thumbnail-effect"
                                    src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url(null, 'post-avatar') : bloggy_build_path('imgs/placeholder.png') ?>"
                                    alt="<?php the_title(); ?>"
                                />
                            </div>
                            <div>
                                <h3 class="post-title post-title--lg">
                                    <?php the_title(); ?>
                                </h3>
                                <span class="text-sm text-skin-muted"><?php the_date(); ?></span>
                            </div>
                        </a>
                    </li>
                <?php endwhile; ?>
            <?php else : ?>
                <p>No posts found!</p>
            <?php endif; wp_reset_query(); ?>
        </ul>
        <ul x-show="tab === 'recent'" class="pt-4">
            <?php
                $recent_posts = new WP_Query([
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                    'orderby' => 'ID',
                    'order' => 'DESC',
                ]);
            ?>
            <?php if ( $recent_posts->have_posts() ) : ?>
                <?php while($recent_posts->have_posts()): $recent_posts->the_post(); ?>
                    <li class="border-b border-skin-muted">
                        <a href="<?php the_permalink(); ?>" class="py-4 flex space-x-4">
                            <div class="w-[60px] h-[60px] rounded-full overflow-hidden flex-none">
                            <img
                                class="thumbnail-effect"
                                src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url(null, 'post-avatar') : bloggy_build_path('imgs/placeholder.png') ?>"
                                alt="<?php the_title(); ?>"
                            />
                            </div>
                            <div>
                                <h3 class="post-title post-title--lg">
                                    <?php the_title(); ?>
                                </h3>
                                <span class="text-sm text-skin-muted"><?php the_date(); ?></span>
                            </div>
                        </a>
                    </li>
                <?php endwhile; ?>
            <?php else : ?>
                <p>No posts found</p>
            <?php endif; ?>
        </ul>
    </div>
</section>