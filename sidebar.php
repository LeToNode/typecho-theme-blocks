<!-- sidebar START -->
<div id="sidebar">
	<div class="sidebar">
		<!-- search box -->
		<div class="widget s">
			<div id="searchbox">
				<form action="" method="post">
						<input type="text" name="s" id="s" class="text" size="20"/>
						<input type="submit"  class="button"   value="搜索"/>
					<!--	<div class="operation">
							<span class="floatleft"><?php _e('Search this blog', 'blocks'); ?></span>
							<input type="submit"  class="button"   value="搜索"/>
							<div class="fixed"></div>
						</div>-->
					</div>
				</form>
		</div>
		<div class="widget s">
			<h3><a title="Follow me!" href="http://twitter.com/leton2008">Twitter</a></h3>
				<ol id="twitter_update_list"><li>Loading...</li></ol>
		</div>

	</div>
	

	<!-- sidebar right -->
	<div id="sidebar_right" class="sidebar">
		<ul class="widgets">

			<!-- recent posts -->
			<li id="pages" class="widget widget_pages">
				<h3>Recent Posts</h3>
				<ul>
					<ul>
                <?php $this->widget('Widget_Contents_Post_Recent')
                ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
            </ul>
				</ul>
			</li>

			<!-- recent comments -->
				<li class="widget">
					<h3>Recent Comments</h3>
					<ul>
						 <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
            <?php while($comments->next()): ?>
                <li id="rc_item_<?php $comments->theId();  ?>" class="rc_item"><div class="rc_avatar rc_left"> <?php $comments->gravatar(30, 'G', 'http://tension.name/images/gravatar.jpg', 'avatar'); ?></div>
                	 <div class="rc_info"><a href="<?php $comments->permalink(); ?>" title="<?php $comments->author('','0'); ?>"><?php $comments->author('','0'); ?></a></div>
                	 <div class="rc_excerpt"><?php $comments->content(); ?></div>
                	 </li>
            <?php endwhile; ?>
					</ul>

			<!-- tag cloud 
			<li class="widget widget_tag_cloud">
				<h3>Tag Cloud</h3>

			</li>-->
			
			 <li class="widget">
			<h3><?php _e('Category'); ?></h3>
            <ul>
                <?php $this->widget('Widget_Metas_Category_List')
                ->parse('<li><a href="{permalink}">{name}</a> ({count})</li>'); ?>
            </ul>
		</li>
			
			
			
			<li class="widget">
			<h3><?php _e('Meta'); ?></h3>
            <ul>
                <?php if($this->user->hasLogin()): ?>
					<li class="last"><a href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a></li>
                    <li><a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a></li>
                <?php else: ?>
                    <li class="last"><a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a></li>
                <?php endif; ?>
                <li><a title="This page validates as XHTML 1.0 Transitional" href="http://validator.w3.org/check/referer">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
                <li><a href="http://www.typecho.org">Typecho</a></li>
            </ul>
		</li>



		</ul>
	</div>
</div>
<!-- sidebar END -->
 
 