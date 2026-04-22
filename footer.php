
<footer class="border-t border-gray-300 text-[rgba(0,0,0,0.87)] p-10 align-center mt-5 mt-md-0">

  <div class="container max-w-6xl mx-auto">

    <div class="grid grid-cols-1 md:grid-cols-5 gap-8">

        <div>
            <h4 class="text-lg font-bold mb-4">About Us</h4>
            <?php wp_nav_menu([
              'theme_location' => 'footer',
              'menu_class' => 'space-y-2 text-[rgba(0,0,0,.67)]',
              'container' => false,
              'fallback_cb' => false      
            ]); ?>
        </div>

        <div>
            <h4 class="text-lg font-bold mb-4">Order Online</h4>
            <?php wp_nav_menu([
              'theme_location' => 'online',
              'menu_class' => 'space-y-2 text-[rgba(0,0,0,.67)]',
              'container' => false,
              'fallback_cb' => false            
              ]); ?>
        </div>

        <div>
            <h4 class="text-lg font-bold mb-4">Rewards</h4>
            <?php wp_nav_menu([
              'theme_location' => 'rewards',
              'menu_class' => 'space-y-2 text-[rgba(0,0,0,.67)]',
              'container' => false,
              'fallback_cb' => false            
              ]); ?>
        </div>

        <div>
            <h4 class="text-lg font-bold mb-4">Social Impact</h4>
           
        </div>
        <div>
            <h4 class="text-lg font-bold mb-4">Promotions</h4>
            
        </div>

    </div>

    <p class="mt-6 text-sm text-[rgba(0,0,0,.67)] text-center">
      © 2026 Coffee Theme | All rights reserved. | HMP
    </p>

    <div class="border-t border-gray-300 mt-8 pt-8">
      <nav class="flex flex-wrap justify-center space-x-6">
        <?php wp_nav_menu([
          'theme_location' => 'footer',
          'menu_class' => 'flex flex-wrap justify-center gap-4 space-x-6',
          'container' => false,
          'fallback_cb' => false
        ])
        ?>
      </nav>

    </div>

  </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>