<?php /* Mystique/digitalnature */ ?>
<!DOCTYPE html>
<html <?php language_attributes('html'); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php wp_title('|', true); ?></title>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if(is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>

<?php wp_head(); ?>

</head>
<body <?php body_class('col-2-right fixed'); ?>>

 <?php
  wp_nav_menu(array(
    'container_class' => 'nav nav-top',
    'menu_class'      => 'menu page-content clear-block',
    'theme_location'  => 'top',
    'fallback_cb'     => '',
  ));
 ?>

 <!-- page -->
 <div id="page">

    <div id="page-ext">

    <!-- header -->
    <div id="header">
      <div class="page-content">
        <div id="site-title" class="clear-block">
          <span>
          	<a href="<?php echo get_option('home'); ?>/"><img src="wp-content/themes/mystique/images/title.png" height="75px" alt="<?php bloginfo('description'); ?>" /></a>
          </span>
		  <?php /*?><?php if(get_bloginfo('description')): ?><div class="headline"><?php bloginfo('description'); ?></div><?php endif; ?><?php */?>
        </div>
      </div>

      <div class="shadow-left page-content">
        <div class="shadow-right nav nav-main">
          <?php
           wp_nav_menu(array(
             'menu_class'     => 'menu fadeThis clear-block',
             'theme_location' => 'primary',
             'fallback_cb'    => 'mystique_page_menu',       // default menu
             'link_after'     => '<span class="p"></span>',  // pointer arrow on 1st level
           ));
          ?>
        </div>
      </div>

    </div>
    <!-- /header -->

    <!-- main -->
    <div id="main" class="page-content">
      <div id="main-ext" class="clear-block">
