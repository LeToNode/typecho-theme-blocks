<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : the_post(); ?>
	<div class="post">
		<h3 class="title"><?php the_title(); ?></h3>

		<div class="content">
			<?php
				if (function_exists('wp_easyarchives')) {
					wp_easyarchives();
				} else {
					echo '<ul>';
					wp_get_archives('type=monthly&show_post_count=1');
					echo '</ul>';
				}
			?>
		</div>

		<div class="meta">
			<div class="floatleft">
				<?php _e('Update: ', 'blocks'); ?><?php the_modified_time(__('F jS, Y', 'blocks')); ?>
			</div>
			<div class="floatright">
				<?php edit_post_link(__('Edit', 'blocks'), '', ''); ?>
			</div>
			<div class="fixed"></div>
		</div>
	</div>

<?php else: ?>
	<div class="block">
		<div class="content small r">
			<?php _e('Sorry, no posts matched your criteria.', 'blocks'); ?>
		</div>
	</div>

<?php endif; ?>

<?php
	// Support comments for WordPress 2.7 or higher
	if (function_exists('wp_list_comments')) {
		comments_template('', true);
	} else {
		comments_template();
	}
?>

<?php get_footer(); ?>
