<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <!-- body has the class "cbp-spmenu-push" -->
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
        <h3>Menu</h3>
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation'));
          endif;
        ?>
    </nav>
  </div>
  <section class="buttonset">
      <!-- Class "cbp-spmenu-open" gets applied to menu and "cbp-spmenu-push-toleft" or "cbp-spmenu-push-toright" to the body -->
      <button id="showLeftPush">Menu</button>
  </section>
</header>
