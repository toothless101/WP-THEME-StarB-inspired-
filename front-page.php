<?php get_header(); ?>

<section class="relative h-screen flex flex-col items-center justify-center text-center" style="background-image: url('<?php echo get_header_image(); ?>'); background-size: cover; background-position: center;">
    <div class="absolute inset-0 bg-[#3E2723]/70"></div>
    <div class="relative z-5 flex flex-col items-center justify-between  py-20">
        <h1 class="text-5xl font-extrabold tracking-widest text-[#ffff]">
            <?php echo get_theme_mod('title_text'); ?>
        </h1>
        <p class="text-xl md:text-xl text-[#F5E6CC] mb-8 max-w-xl mx-auto">
           <?php echo get_theme_mod('sub-hero-tag'); ?>
        </p>
        <a href="" class="bg-[#C69C6D] text-[#3E2723] px-8 py-3 rounded-lg mt-8 font-semibold hover:bg-[#b68d5f] transition">
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

                <a href="<?php the_permalink(); ?>" class="inline-block mt-9  border-2 border-[#C69C6D] text-[#3E2723] px-8 py-3 rounded-lg font-semibold hover:bg-[#b68d5f] transition">
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