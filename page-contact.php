<?php get_header(); ?>

<section class="relative h-screen flex flex-col items-center justify-center text-center" style="background-image: url('<?php echo get_theme_mod('contact_bg_image'); ?>'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-[#3E2723]/70"></div>

    <h1 class="text-4xl font-bold">
        <?php echo get_theme_mod('contact_hero_title', 'Get in Touch With Us'); ?>
    </h1>
    <p class="mt-4 text-lg text-gray-600">
        <?php echo get_theme_mod('contact_hero_subtitle', 'How can we help you?'); ?>
    </p>
</section>
<?php get_footer(); ?>