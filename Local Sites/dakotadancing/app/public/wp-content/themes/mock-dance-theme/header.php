<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
    <!-- character settings --> 
    <meta charset="<?php bloginfo('charset'); ?>">
    <!-- ALLOWS FOR NATIVE DEVICE SIZE TO BE USED / but CSS needs to be optimized too-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- this gives wordpress control over the head section -->
        <?php wp_head(); ?>
    </head>

<body <?php body_class();  ?>>
    <header class="site-header">
    <div class="container">
      <h1 class="school-logo-text float-left"><a href="<?php echo site_url() ?>"><strong>dakota</strong>_dancing</a></h1>
      <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      <div class="site-header__menu group">
        <nav class="main-navigation">
          <ul>
            <li><a href="#">Home</a></li>
            <li <?php if (is_page('about-me')) echo 'class="current-menu-item"'?>><a href="<?php echo site_url('/about-me') ?>">About</a></li>
            <li <?php if (get_post_type() == 'class') echo 'class="current-menu-item"' ?>><a href="<?php echo get_post_type_archive_link('class'); ?>">Classes</a></li>
            <li <?php if (get_post_type() == 'post') echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
          </ul>
        </nav>
        <div class="site-header__util">
          <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
          <a href="#" class="btn btn--small  btn--dark-orange float-left">Sign Up</a>
          <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
      </div>
    </div>
  </header>
</body>
  </html>
  
  
       
