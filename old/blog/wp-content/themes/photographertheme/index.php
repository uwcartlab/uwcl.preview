<?php get_header(); ?>

      <?php
      $args = array(
                   //'category_name' => 'blog',
                   'post_type' => 'post',
                   'posts_per_page' => 6,
                   'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                   );
      $x = 0;
      query_posts($args);
      while (have_posts()) : the_post(); ?>
      
          <?php if($x % 2 == 0) { ?>
              <div class="home_post_box left">
          <?php } else { ?>
              <div class="home_post_box right">
          <?php } ?>
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featured-home'); ?></a>
              <!--<img src="<?php //bloginfo('stylesheet_directory'); ?>/images/home-big-image1.png" />-->
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          </div><!--//home_post_box-->      
          
          <?php if($x % 2 == 1) { ?>
              <div class="clear"></div>
          <?php } ?>
      
      <?php $x++; ?>
      <?php endwhile; ?>      

<div class="clear"></div>
      
      <div class="navigation">
          <?php if(get_previous_posts_link()) { ?><div class="left"><?php previous_posts_link('&laquo; Previous') ?></div><?php } ?>
          <?php if(get_next_posts_link()) { ?><div class="right"><?php next_posts_link('Next &raquo;') ?></div><?php } ?>
          <div class="clear"></div>
      </div><!--//navigation-->      
      
      <?php wp_reset_query(); ?>      
    
<?php get_footer(); ?>  