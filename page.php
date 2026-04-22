<?php get_header(); ?>

<section class="max-w-5xl mx-auto px-4 py-10"> 
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <h1 class="text-4xl font-bold mb-6"><?php the_title(); ?></h1>
        <?php if(has_post_thumbnail()): ?>
            <?php the_post_thumbnail('large', ['class'=>'w-full h-96 object-cover mb-6']); ?>
        <?php endif; ?>

        <div class="prose max-w-none">
            <?php the_content(); ?>
        </div>
        <?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>