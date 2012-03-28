<?php
/*
Template Name: Links
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : the_post(); ?>
	<div class="post">
		<h3 class="title"><?php the_title(); ?></h3>

		<div class="content linkcat">
			<ul>
				<?php wp_list_bookmarks('title_li=&categorize=0'); ?>
			</ul>
			<div class="fixed"></div>
		</div>

		<div class="meta">
			<div class="floatleft">
				<?php _e('Update: ', 'blocks'); ?><?php the_modified_time(__('F jS, Y', 'blocks')); ?>
			</div>
			<div class="floatright">
				<?php if ( $user_ID ) : ?>
					<span class="editlinks"><a href="<?php echo get_settings('siteurl'); ?>/wp-admin/link-manager.php"><?php _e('Edit links', 'blocks'); ?></a></span>
				<?php endif; ?>
				<?php edit_post_link(__('Edit', 'blocks'), ' | ', ''); ?>
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
