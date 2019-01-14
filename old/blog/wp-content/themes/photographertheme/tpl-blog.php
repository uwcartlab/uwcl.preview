<?php
/*
  Template Name: Blog
*/
?>

<?php get_header(); ?>

    <div id="content_left">
    
      <?php
      $args = array(
                   'category_name' => 'blog',
                   'post_type' => 'post',
                   'posts_per_page' => 3,
                   'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                   );
      query_posts($args);
      while (have_posts()) : the_post(); ?>    
      
        <div class="blog_post_box">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featured-blog'); ?></a>
            
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php echo substr(strip_tags(get_the_content()),0,550); ?>...</p>
        </div><!--//blog_post_box-->      
      
      <?php endwhile; ?>      
        
        <div class="clear"></div>
        
        <div class="navigation">
            <?php if(get_previous_posts_link()) { ?><div class="left"><?php previous_posts_link('&laquo; Previous') ?></div><?php } ?>
            <?php if(get_next_posts_link()) { ?><div class="right"><?php next_posts_link('Next &raquo;') ?></div><?php } ?>
            <div class="clear"></div>
        </div><!--//navigation-->      
        
        <?php wp_reset_query(); ?>      
    
    </div><!--//content_left-->
    
    <?php get_sidebar(); ?>
    
    <div class="clear"></div>
    
<?php get_footer(); ?>    