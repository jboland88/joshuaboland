<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jboland
 */

$recent = new WP_Query([
	'post_type' => 'post',
	'posts_per_page' => 5
])

?>

<aside className="siteSidebar">
	<h4>Recent Posts</h4>
	<?php if($recent->have_posts()): ?>
		<?php while($recent->have_posts()): $recent->the_post(); ?>
			<ul class="postList">
				<?php get_template_part('template-parts/feeds/post', 'list') ?>
			</ul>
		<?php endwhile; ?>
	<?php endif;?>
</aside><!-- #secondary -->
