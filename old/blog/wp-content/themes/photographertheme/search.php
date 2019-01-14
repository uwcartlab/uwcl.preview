<?php get_header(); ?>

    <div id="content_left">

        <?php if (have_posts()) : ?>
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