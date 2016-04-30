<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php bloginfo('template_url'); ?>/stylesheets/bootstrap.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/stylesheets/styles.css" rel="stylesheet" type="text/css">
<link href="/ts/stylesheets/styles.css" rel="stylesheet" />
<header class="navbar navbar-static-top bs-docs-nav wrapper" id="top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="index.php" class="navbar-brand">Soddy Daisy Thrift Store</a>
    </div>
    <nav id="bs-navbar" class="collapse navbar-collapse">
    
    <?php
wp_nav_menu( array(
'menu'              => 'primary',
'theme_location'    => 'main-menu',
'depth'             => 1,
'container'         => 'div',
'container_class'   => '',
'menu_class'        => 'nav navbar-nav',
'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
'walker'            => new wp_bootstrap_navwalker())
);
?>
      
    </nav>
  </div>
</header>

