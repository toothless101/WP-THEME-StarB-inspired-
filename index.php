<?php
get_header(); ?>
<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1 class="text-4xl font-bold mb-6 text-center text-[#3E2723]">
            <?php the_title(); ?>
        </h1>

        <div class="text-[#6D4C41] text-lg leading-relaxed mb-10">
            <?php the_content(); ?>
        </div>
    <?php endwhile; else: ?>
        <p>No content found.</p>
    <?php endif; ?>
</main>

<?php
get_footer(); ?>