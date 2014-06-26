<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
    <!-- body has the class "cbp-spmenu-push" -->
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
        <h3>Menu</h3>
        <a href="#">Celery seakale</a>
        <a href="#">Dulse daikon</a>
        <a href="#">Zucchini garlic</a>
        <a href="#">Catsear azuki bean</a>
        <a href="#">Dandelion bunya</a>
        <a href="#">Rutabaga</a>
    </nav>
  </div>
</header>
<div class="container">
    <div class="main">
        <section>
            <h2>Slide Menus</h2>
            <!-- Class "cbp-spmenu-open" gets applied to menu -->
            <button id="showLeft">Show/Hide Left Slide Menu</button>
            <button id="showRight">Show/Hide Right Slide Menu</button>
            <button id="showTop">Show/Hide Top Slide Menu</button>
            <button id="showBottom">Show/Hide Bottom Slide Menu</button>
        </section>
        <section class="buttonset">
            <h2>Push Menus</h2>
            <!-- Class "cbp-spmenu-open" gets applied to menu and "cbp-spmenu-push-toleft" or "cbp-spmenu-push-toright" to the body -->
            <button id="showLeftPush">Show/Hide Left Push Menu</button>
            <button id="showRightPush">Show/Hide Right Push Menu</button>
        </section>
    </div>
</div>
