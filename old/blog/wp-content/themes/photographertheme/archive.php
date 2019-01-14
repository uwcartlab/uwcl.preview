<?php get_header(); ?>

    <div id="content_left">

        <?php if (have_posts()) : ?>

        <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
        <?php /* If this is a category archive */ if (is_category()) { ?>
              <h1>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h1>
        <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
              <h1>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>
        <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
              <h1>Archive for <?php the_time('F jS, Y'); ?></h1>
        <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
              <h1>Archive for <?php the_time('F, Y'); ?></h1>
        <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
              <h1>Archive for <?php the_time('Y'); ?></h1>
        <?php /* If this is an author archive */ } elseif (is_author()) { ?>
              <h1>Author Archive</h1>
        <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
              <h1>Blog Archives</h1>
        <?php } ?>

        <?php while (have_posts()) : the_post(); ?>

            <div class="blog_post_box">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featured-blog'); ?></a>
                
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><?php echo substr(strip_tags(get_the_content()),0,550); ?>...</p>
            </div><!--//blog_post_box-->      
      
        <?php endwhile; ?>
        
            <?php else :
    
                    if ( is_category() ) { // If this is a category archive
                            printf("<h2 class='center'>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
                    } else if ( is_date() ) { // If this is a date archive
                            echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
                    } else if ( is_author() ) { // If this is a category archive
                            $userdata = get_userdatabylogin(get_query_var('author_name'));
                            printf("<h2 class='center'>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
                    } else {
                            echo("<h2 class='center'>No posts found.</h2>");
                    }
                    get_search_form();
    
            endif;
    ?>
        
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