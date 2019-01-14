<?php

include('settings.php');

if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}

if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
  add_theme_support( 'post-thumbnails' );
  add_image_size('featured-home',498,285,true);
  add_image_size('featured-blog',687,331,true);
  add_image_size('featured-sidebar',268,153,true);
}

if ( function_exists('register_sidebar') ) {
        register_sidebar(array(
                'name'=>'Footer 1',
		'before_widget' => '<div class="footer_inside_box">',
		'after_widget' => '<div class="clear"></div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
        
        register_sidebar(array(
                'name'=>'Footer 2',
		'before_widget' => '<div class="footer_inside_box">',
		'after_widget' => '<div class="clear"></div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

        register_sidebar(array(
                'name'=>'Footer 3',
		'before_widget' => '<div class="footer_inside_box">',
		'after_widget' => '<div class="clear"></div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
        
        register_sidebar(array(
                'name'=>'Footer 4',
		'before_widget' => '<div class="footer_inside_box">',
		'after_widget' => '<div class="clear"></div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));        
}

function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image
    $first_img = "/images/post_default.png";
  }
  return $first_img;
}

function kriesi_pagination($pages = '', $range = 2)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo "<div class='pagination'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div>\n";
     }
}



// **** EX SOCIAL START ****

class ex_social extends WP_Widget {

	function ex_social() {
		parent::WP_Widget(false, 'Photographer Social');
	}

	function widget($args, $instance) {
                $args['social_title'] = $instance['social_title'];
		$args['dribbble_link'] = $instance['dribbble_link'];
                $args['forrst_link'] = $instance['forrst_link'];
                $args['facebook_link'] = $instance['facebook_link'];
                $args['twitter_link'] = $instance['twitter_link'];
                $args['tumblr_link'] = $instance['tumblr_link'];
		ex_func_social($args);
	}

	function update($new_instance, $old_instance) {
		return $new_instance;
	}

	function form($instance) {
                $social_title = esc_attr($instance['social_title']);
		$dribbble_link = esc_attr($instance['dribbble_link']);
                $forrst_link = esc_attr($instance['forrst_link']);
                $facebook_link = esc_attr($instance['facebook_link']);
                $twitter_link = esc_attr($instance['twitter_link']);
                $tumblr_link = esc_attr($instance['tumblr_link']);
?>
                <p><label for="<?php echo $this->get_field_id('social_title'); ?>"><?php _e('Title:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('social_title'); ?>" name="<?php echo $this->get_field_name('social_title'); ?>" type="text" value="<?php echo $social_title; ?>" /></label></p>
                
                <p><label for="<?php echo $this->get_field_id('facebook_link'); ?>"><?php _e('Facebook Link:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('facebook_link'); ?>" name="<?php echo $this->get_field_name('facebook_link'); ?>" type="text" value="<?php echo $facebook_link; ?>" /></label></p>    

                <p><label for="<?php echo $this->get_field_id('twitter_link'); ?>"><?php _e('Twitter Link:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('twitter_link'); ?>" name="<?php echo $this->get_field_name('twitter_link'); ?>" type="text" value="<?php echo $twitter_link; ?>" /></label></p>
                
                <p><label for="<?php echo $this->get_field_id('tumblr_link'); ?>"><?php _e('Tumblr Link:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('tumblr_link'); ?>" name="<?php echo $this->get_field_name('tumblr_link'); ?>" type="text" value="<?php echo $tumblr_link; ?>" /></label></p>                
                
		<p><label for="<?php echo $this->get_field_id('dribbble_link'); ?>"><?php _e('Dribbble Link:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('dribbble_link'); ?>" name="<?php echo $this->get_field_name('dribbble_link'); ?>" type="text" value="<?php echo $dribbble_link; ?>" /></label></p>
                
                <p><label for="<?php echo $this->get_field_id('forrst_link'); ?>"><?php _e('Forrst Link:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('forrst_link'); ?>" name="<?php echo $this->get_field_name('forrst_link'); ?>" type="text" value="<?php echo $forrst_link; ?>" /></label></p>
                
<?php
	}
 }
function ex_func_social($args = array(), $displayComments = TRUE, $interval = '') {

	global $wpdb;

        //echo $args['before_widget'] . $args['before_title'] . $args['title'] . $args['after_title'];
        echo $args['before_widget'] . $args['before_title'] . $args['social_title'] . $args['after_title'];
        ?>
        <ul class="stay_connected_list">
          <?php if($args['facebook_link'] != '') { ?>
              <li><a href="<?php echo $args['facebook_link']; ?>">Facebook</a></li>        
          <?php } ?>
          
          <?php if($args['twitter_link'] != '') { ?>
              <li><a href="<?php echo $args['twitter_link']; ?>">Twitter</a></li>
          <?php } ?>
          
          <?php if($args['tumblr_link'] != '') { ?>
            <li class="last"><a href="<?php echo $args['tumblr_link']; ?>">Tumblr</a></li>          
          <?php } ?>
          
          <?php if($args['dribbble_link'] != '') { ?>
              <li><a href="<?php echo $args['dribbble_link']; ?>">Dribbble</a></li>
          <?php } ?>
          
          <?php if($args['forrst_link'] != '') { ?>
              <li><a href="<?php echo $args['forrst_link']; ?>">Forrst</a></li>
          <?php } ?>
        </ul>
        <?php
        
        echo $args['after_widget'];

}
register_widget('ex_social');  

// **** EX SOCIAL END ****


// **** EX BLOG START ****

class ex_blog extends WP_Widget {

	function ex_blog() {
		parent::WP_Widget(false, 'Photographer Blog');
	}

	function widget($args, $instance) {
                $args['blog_title'] = $instance['blog_title'];
		ex_func_blog($args);
	}

	function update($new_instance, $old_instance) {
		return $new_instance;
	}

	function form($instance) {
                $blog_title = esc_attr($instance['blog_title']);
?>
                <p><label for="<?php echo $this->get_field_id('blog_title'); ?>"><?php _e('Title:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('blog_title'); ?>" name="<?php echo $this->get_field_name('blog_title'); ?>" type="text" value="<?php echo $blog_title; ?>" /></label></p>
                
<?php
	}
 }
function ex_func_blog($args = array(), $displayComments = TRUE, $interval = '') {

	global $wpdb;

        //echo $args['before_widget'] . $args['before_title'] . $args['title'] . $args['after_title'];
        echo $args['before_widget'] . $args['before_title'] . $args['blog_title'] . $args['after_title'];
        ?>
        <ul>
        
      <?php
      $args = array(
                   'category_name' => 'blog',
                   'post_type' => 'post',
                   'posts_per_page' => 4
                   );
      query_posts($args);
      while (have_posts()) : the_post(); ?>
          <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
      <?php endwhile; ?>      
      <?php wp_reset_query(); ?>
      
        </ul>
        <?php
        
        //echo $args['after_widget'];
        echo '<div class="clear"></div></div>';

}
register_widget('ex_blog');  

// **** EX BLOG END ****
?>