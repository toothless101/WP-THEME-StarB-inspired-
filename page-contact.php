<?php get_header(); ?>

<section class="relative h-screen flex flex-col items-center justify-center text-center" style="background-image: url('<?php echo get_theme_mod('contact_bg_image'); ?>'); background-size: cover; background-position: center; background-color: rgba(62, 39, 35, 0.7); background-blend-mode: overlay;">
    <div class="flex flex-col items-start justify-start text-center text-white px-4">
        <h1 class="text-8xl font-bold text-white">
            <?php echo get_theme_mod('contact_hero_title', 'Get in Touch With Us'); ?>
        </h1>
        <p class="mt-4 text-lg text-white">
            <?php echo get_theme_mod('contact_hero_subtitle', 'How can we help you?'); ?>
        </p>

         <button class="mt-8 px-6 py-3 border border-white text-white rounded-full hover:bg-white hover:text-black transition">
            Browse our contacts
        </button>
    </div>
</section>

<section class="py-16 px-6 max-w-5xl mx-auto">
    <?php 
        while(have_posts()): the_post();
            the_content(); 
        endwhile;
    ?>
</section>

<?php get_footer(); ?>