<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="sticky top-0 z-50 bg-white shadow ">
  <nav class="max-w-8xl mx-auto flex items-center gap-6 p-4">

    <!-- <div class="text-xl font-bold text-green-900">
      Coffee Blog
    </div> -->
    <div>
        <?php if(has_custom_logo()) {
            the_custom_logo();
        } 
        else{
            echo '<div class="text-xl font-bold text-green-900">' . get_bloginfo('name') . '</div>';
        }
        
        ?>
    </div>

    <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'container' => false,
        'menu_class' => 'main-menu flex gap-6 uppercase text-sm font-bold tracking-wide',
      ]);
    ?>

  </nav>
</header>