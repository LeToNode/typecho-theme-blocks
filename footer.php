<!-- footer START -->
	<div id="footer">
		<div class="content">
			<span id="about">
				<a href="<?php $this->options->siteurl(); ?>"><?php $this->options->title(); ?></a> <?php _e('is powered by'); ?> <a href="http://www.typecho.org">Typecho)))</a> <?php _e('theme modified by'); ?> <a href="http://www.letonlife.cn">LeToN.j1Y</a><br /><a href="<?php $this->options->feedUrl(); ?>"><?php _e('Entries'); ?> <abbr title="Really Simple Syndication">RSS</abbr></a> and <a href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('Comments'); ?> <abbr title="Really Simple Syndication">RSS</abbr></a>
			</span>
			<a id="gotop" href="#" onclick="MGJS.goTop();return false;"><?php _e('Top', 'blocks'); ?></a>
			<div class="fixed"></div>
		</div>
	</div>
	<!-- footer END -->

</div>
<!-- container END -->
<?php
if ($this->is('single')) {
    Helper::threadedCommentsScript();
}
?>
<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/leton2008.json?callback=twitterCallback2&amp;count=5"></script>

</body>
</html>

 
 