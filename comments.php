<?php function threadedComments($comments)  { ?>
<li id="<?php $comments->theId(); ?>" class="comment regularcomment">
			<div class="header">
				<?php $comments->gravatar(24, 'G', 'http://tension.name/images/gravatar.jpg', 'avatar'); ?>
				<span class="author with_avatar"><?php $comments->author(); ?></span>
				<span class="items floatleft"><?php Helper::replyLink($comments->theId, $comments->coid, 'Reply', 'respond'); ?></span>
				<span class="date floatright"><?php $comments->date('F jS, Y'); ?> at <?php $comments->date('h:i a'); ?> <span class="count">#<?php echo $comments->sequence(); ?></span>
			</div>
			<div class="body" id="commentbody-<?php $comments->theId(); ?>">
				<?php $comments->content(); ?>
			</div>					
			  <?php $comments->threadedComments('<ol>', '</ol>'); ?>
		</li>					
<?php } ?>
<div id="comments">
	<?php $this->comments()->to($comments); ?>
	<ol id="comment_list">
		<?php while($comments->next()): ?>
		<li id="<?php $comments->theId(); ?>" class="comment regularcomment">
			<div class="header">
				<?php $comments->gravatar(24, 'G', 'http://tension.name/images/gravatar.jpg', 'avatar'); ?>
				<span class="author with_avatar"><?php $comments->author(); ?></span>
				<span class="items floatleft"><?php Helper::replyLink($comments->theId, $comments->coid, 'Reply', 'respond'); ?></span>
				<span class="date floatright"><?php $comments->date('F jS, Y'); ?> at <?php $comments->date('h:i a'); ?> <span class="count">#<?php echo $comments->sequence(); ?></span>
			</div>
			<div class="body" id="commentbody-<?php $comments->theId(); ?>">
				<?php $comments->content(); ?>
			</div>					
			  <?php $comments->threadedComments('<ol>', '</ol>'); ?>
		</li>
		<?php endwhile; ?>
	</ol>
<?php if($this->allow('comment')): ?>
<div id="respond">
	<form id="commentform" action="<?php $this->commentUrl() ?>" method="post">
		<div class="body">
			<div class="header">
				<h3 class="title">
					<?php _e('Leave a Reply'); ?><span class="cancle_comment_reply"><?php Helper::cancleCommentReplyLink('Click here to cancel reply', 'respond'); ?></span>
				</h3>
				<div class="fixed"></div>
			</div>
			<div class="text"><textarea name="text" id="text" class="textarea" cols="64" rows="8" tabindex="4"><?php $this->remember('text'); ?></textarea></div>
			<div class="info">
				<div class="part">
					 <?php if($this->user->hasLogin()): ?>
					<div class="row">Logged in as <a href="<?php $this->options->adminUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('Logout'); ?> &raquo;</a></div>
 					<?php else: ?>
					<div id="author_info">
						<div><label for="author" class="small"><?php _e('Name', 'blocks'); ?> <?php if ($req) _e('*', 'blocks'); ?></label></div>
						<div><input type="text" class="textfield" name="author" id="author" value="<?php $this->remember('author'); ?>" tabindex="1" /></div>
						<div><label for="email" class="small"><?php _e('E-Mail', 'blocks');?> <?php if ($req) _e('*', 'blocks'); ?> <?php _e('(will not be published)', 'blocks');?></label></div>
						<div><input type="text" class="textfield" name="mail" id="mail" value="<?php $this->remember('mail'); ?>" tabindex="2" /></div>
						<div><label for="url" class="small"><?php _e('Website', 'blocks'); ?></label></div>
						<div><input type="text" class="textfield" name="url" id="url" value="<?php $this->remember('url'); ?>" tabindex="3" /></div>
					</div>
					<?php endif; ?>
				</div>
				<div class="part">
					<input name="submit" type="submit" id="submit" class="button" tabindex="5" value="<?php _e('Submit Comment'); ?>" />
				</div>
			</div>
			<div class="fixed"></div>
		</div>
	</form>
</div>
 <?php endif; ?>     
</div>
