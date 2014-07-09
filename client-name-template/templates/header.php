<header class="site-header" role="banner">
  <div class="container">
  	<div class="row">
  	<div class="col-sm-3">
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/img/" alt="<?php bloginfo('name'); ?>"></a>
  	</div>
  	<div class="col-sm-9">
    <a class="menu-trigger" href="#touch"><span></span></a>
    <nav role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
        endif;
      ?>      
    </nav>
    
  	</div>
  </div>
</header>
