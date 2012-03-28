<?php
/**
 * 
 * 本皮肤基于NeoEase的Wordpress同名皮肤制作.
 * 原作者网站<a href="http://www.neoease.com/">NeoEase</a>
 * 皮肤预览可以参考<a href="http://demo.neoease.com/">Blocks</a>
 * 
 * @package blocks
 * @author leton,NeoEase
 * @version 1.0.1
 * @link http://www.letonlife.cn
 */
 
 include('header.php');
 ?>


	<?php while($this->next()): ?>

	<div class="post">
		<h3 class="title"><a href="<?php $this->permalink() ?>" rel="bookmark"><?php $this->title() ?></a></h3>

		<div class="content">
			<?php $this->content('继续阅读 &raquo;'); ?>
			<div class="fixed"></div>
		</div>

		<div class="meta">
			<div class="alignleft floatleft">
				<div class="date"><?php $this->date('F jS, Y g:i A'); ?></div>
				<div class="post_info"><?php $this->category(','); ?></div>
				<div class="post_info"><?php $this->tags(', ', true, '没有'); ?></div>
			</div>
			<div class="alignright floatright">
				<div><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('No Comments', '1 Comments', '%d Comments'); ?></a></div>
				<div><?php $this->author(); ?></div>
			</div>
			<div class="fixed"></div>
		</div>
	</div>

<?php endwhile; ?>

	<div id="pagenavi" class="block">
		<ol class="wp-pagenavi">
		<?php $this->pageNav(); ?>
	</ol>
	</div>

		</div>
		<!-- main END -->

		<?php include('sidebar.php'); ?>
		<div class="fixed"></div>
	</div>
	<!-- content END -->
	<?php include('footer.php'); ?>
 
 