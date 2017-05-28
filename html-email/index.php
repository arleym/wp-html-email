<?php
/**
 * The main template file
 *
 * With only one email template, there's currently no need for hierarchy
 *
 * @package WordPress
 * @subpackage HTML_Email
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
	<div mc:edit="std_content00">

		<?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) : the_post();

          the_title( '<h1 class="entry-title">', '</h1>' );
          the_content();

			endwhile;
		endif; ?>

	</div><!-- std_content00 -->
<?php get_footer();
