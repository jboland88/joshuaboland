<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package jboland
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row">
				<div class="col-md-10">
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', get_post_format() );

					endwhile; // End of the loop.
					?>
				</div>

				<div class="col-md-6">
					<?php get_sidebar() ?>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
