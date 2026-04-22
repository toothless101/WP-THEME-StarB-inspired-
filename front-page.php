<?php get_header(); ?>

<section class="relative h-screen flex items-center justify-center text-center" style="height: 100vh; background-image: url('<?php echo get_header_image(); ?>'); background-size: cover; background-position: center;">
    <div class="relative z-10 px-4">
        <a href="#blog" class="bg-[#C69C6D] text-[#3E2723] px-8 py-3 rounded-lg font-semibold hover:bg-[#b68d5f] transition">
            Explore Blog
        </a>
    </div>
</section>

<section class="py-16  text-center">
        <h2 class="text-3xl font-bold text-center text-[#3E2723] mb-10">
            Featured Coffee Stories and Moments
        </h2>
    <div class="grid grid-cols-2 gap-6 px-10">
        <?php 
            $args = array(
                'category_name' => 'featured',
                'posts_per_page' => 4
            );
            $query = new WP_Query($args);

            if($query->have_posts()):
                while($query->have_posts()): $query->the_post();
            ?>
            <div class="">
                <?php if(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('coffee-thumbnail', ['class'=>'w-full h-90 object-cover mb-4']); ?>
                <?php endif; ?>

                <h3 class="text-xl font-bold mt-4"> 
                    <?php the_title(); ?>
                </h3>
                <p class="text-sm mt-2">
                    <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                </p>

                <a href="<?php the_permalink(); ?>" class="inline-block mt-9  text-sm font-semibold text-black hover:border-black-500 border border-black px-4 py-2 rounded-full transition-colors duration-30">
                    Read More ->
                </a>

            </div>
            <?php 
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
    </div>

</section>
<?php get_footer(); ?>