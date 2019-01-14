    <div id="sidebar">
        <ul class="side_featured">
          <?php
          $args = array(
//                       'category_name' => 'featured-sidebar',
                       'post_type' => 'post',
                       'posts_per_page' => 5,
                       'orderby' => 'rand',
                       'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                       );
          query_posts($args);
          while (have_posts()) : the_post(); ?>            
              <li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featured-sidebar'); ?></a></li>
          <?php endwhile; ?>  
<?php wp_reset_query(); ?>                

        </ul>
    </div><!--//sidebar-->