<?php /* Mystique/digitalnature */ ?>

<?php get_header(); ?>
<?php $i = 0; ?>
   <!-- fb-root for like box -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=405811676104414";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
    
  <!-- main content (masks): primary + sidebar(s) -->
  <div id="mask-3" class="clear-block">
    <div id="mask-2">
      <div id="mask-1" style="top: 2px;">

        <!-- primary content -->
        <div id="about_box" class="home_box">
        <h2 class="title_box">About</h2>
        	<?php echo string_override_manual('1')?>
        </div>
        <div id="minifeed_box" class="home_box">
		<h2 class="title_box">Recent Activity</h2>
          <?php if(have_posts()): ?>
          <?php while((have_posts())&&($i<5)): ?>
            <?php the_post(); ?>
            <?php get_template_part('mini_teaser'); ?>
            <?php $i++; ?>
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

        <?php get_sidebar("home"); ?>

      </div>
    </div>

  </div>
  <!-- /main content -->

<?php get_footer(); ?>
