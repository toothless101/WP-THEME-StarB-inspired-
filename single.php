<?php get_header(); ?>

<section class="relative h-screen flex flex-col items-center justify-center"
    style="background-image: url('<?php echo get_the_post_thumbnail_url(null, 'full'); ?>'); 
           background-size: cover; 
           background-position: center;">

    <?php if(have_posts()) : while(have_posts()): the_post(); ?>
    <div class="flex flex-col justify-start text-center px-4">
        <h1 class="text-8xl font-bold text-white mb-4">
            <?php the_title(); ?>
        </h1>
    </div>
    <?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>