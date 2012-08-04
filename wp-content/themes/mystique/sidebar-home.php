<?php /* Mystique/digitalnature */ ?>

  <!-- 1st sidebar -->
  <div id="sidebar-home">

    <ul class="blocks">

      <?php /*?><?php if(!dynamic_sidebar('sidebar-1')): ?><?php */?>
      <li class="block block-search">
        <?php get_search_form(); ?>
      </li>
      
      <li>
      	<div style="margin-bottom: 10px" class="fb-like-box" data-href="http://www.facebook.com/IITBcult" data-width="310px" data-show-faces="true" data-stream="true" data-header="false">        </div>
      <li>      

      <li class="block">
        <div class="block-content block-archives clear-block" id="instance-archives">
          <div class="title">
            <h3 class="widget-title"><?php _e('Archives', 'mystique'); ?></h3>
            <div class="bl"></div><div class="br"></div>
          </div>
          <ul>
            <?php wp_get_archives( 'type=monthly' ); ?>
          </ul>
        </div>
      </li>

      <li class="block">
        <div class="block-content block-meta clear-block" id="instance-meta">
          <div class="title">
            <h3 class="widget-title"><?php _e('Meta', 'mystique'); ?></h3>
            <div class="bl"></div><div class="br"></div>
          </div>
          <ul>
            <?php wp_register(); ?>
            <li><?php wp_loginout(); ?></li>
            <?php wp_meta(); ?>
          </ul>
        </div>
      </li>

      <?php /*?><?php endif; // end primary widget area ?><?php */?>
    </ul>

  </div>
  <!-- /1st sidebar -->
