<?php /* Mystique/digitalnature */ ?>

<?php get_header(); ?>

  <!-- main content (masks): primary + sidebar(s) -->
  <div id="mask-3" class="clear-block">
    <div id="mask-2">
      <div id="mask-1">

        <!-- primary content -->
        <div id="about_box" class="home_box">
        <h2 class="title_box">About</h2>
        	The Institute Cultural Council manages a plethora of events, workshops and club activities spread over seven genres. The cultural activities at IIT Bombay provide a great platform for students to learn, enjoy and showcase their talent. Come, be a part of the cultural scene of IIT Bombay!
        </div>
        <div id="minifeed_box" class="home_box">
		<h2 class="title_box">Recent Posts</h2>
          <?php if(have_posts()): ?>
          <?php while(have_posts()): ?>
            <?php the_post(); ?>
            <?php get_template_part('mini_teaser'); ?>
          <?php endwhile; ?>

          <?php if(function_exists('wp_pagenavi')): ?>
            <?php wp_pagenavi() ?>
          <?php else : ?>
          <div class="page-navi clear-block">
            <div class="alignleft"><?php previous_posts_link(__('&laquo; Previous', 'mystique')); ?></div>
            <div class="alignright"><?php next_posts_link(__('Next &raquo;', 'mystique')); ?></div>
          </div>
          <?php endif; ?>

          <?php else: ?>
          <h1 class="title error"><?php _e('Oops, nothing here :(', 'mystique'); ?></h1>
          <?php endif; ?>

        </div>
        <!-- /primary content -->

        <?php /*?><?php get_sidebar(); ?><?php */?>

      </div>
    </div>

  </div>
  <!-- /main content -->

<?php get_footer(); ?>
