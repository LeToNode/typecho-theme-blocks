<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="leton,leton2008(at)yahoo.com.cn" />
    <title>
      <?php $this->options->title(); ?>
      <?php $this->archiveTitle(); ?>
    </title>	
    <link rel="alternate" type="application/rss+xml" title="<?php _e('RSS 2.0 - all posts', 'blocks'); ?>" href="<?php echo $this->options->feedUrl(); ?>" /> 	
    <link rel="alternate" type="application/rss+xml" title="<?php _e('RSS 2.0 - all comments', 'blocks'); ?>" href="<?php $this->options->commentsFeedUrl(); ?>" /> 	
    <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" /> 	
    <link rel="stylesheet" type="text/css" media="screen" href="<?php $this->options->themeUrl('pagenavi-css.css'); ?>" /> 
    <link rel="stylesheet" type="text/css" media="screen" href="<?php $this->options->themeUrl('wp-recentcomments.css'); ?>" /> 
    <!--[if IE 6]>
    		<link rel="stylesheet" href="<?php $this->options->themeUrl('ie6.css'); ?>" type="text/css" media="screen" />
    	<![endif]--> 	
    <!-- style END --> 	
    <!-- script START --> 	
<script type="text/javascript" src="<?php $this->options->themeUrl(); ?>js/util.js"></script> 	
<script type="text/javascript" src="<?php $this->options->themeUrl(); ?>js/menu.js"></script> 	
    <!-- script END -->
    <?php $this->header(); ?>
  </head>
  <body>
    <!-- container START -->
    <div id="container">	
      <!-- header START -->	
      <div id="header">		
        <div class="content">			
          <div id="title">				<h1>
              <a href="<?php $this->options->siteUrl(); ?>/">
                <?php $this->options->title(); ?></a></h1>				
            <div id="tagline">
              <?php $this->options->description(); ?>
            </div>			
          </div>			
          <div class="fixed">
          </div>		
        </div>		
        <div class="meta">			
          <ul id="menubar">				
            <li <?php if($this->is('index')){echo 'class="first"';}?>>
              <a href="<?php $this->options->siteUrl(); ?>">
                <?php _e('Home'); ?></a></li>				
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>			
            <?php while($pages->next()): ?>			
            <li<?php if($this->is('page', $pages->slug)): ?> class="first"
              <?php endif; ?>>
              <a href="<?php $pages->permalink(); ?>" title="
                <?php $pages->title(); ?>">
                <?php $pages->title(); ?></a></li>			
              <?php endwhile; ?>			
          </ul>			
          <div id="subscribe" class="feed">				
            <a title="<?php _e('Subscribe to this blog...', 'blocks'); ?>" class="feedlink" href="<?php echo $this->options->feedUrl(); ?>">
              <?php _e('<abbr title="Really Simple Syndication">RSS</abbr> feed', 'blocks'); ?></a>					
            <ul>						<li>
              <a title="<?php _e('Subscribe with ', 'blocks'); _e('Youdao', 'blocks'); ?>"	href="http://reader.youdao.com/#url=<?php echo $this->options->feedUrl(); ?>">								
                <?php _e('Youdao', 'blocks'); ?></a></li>						<li>
              <a title="<?php _e('Subscribe with ', 'blocks'); _e('Xian Guo', 'blocks'); ?>"	href="http://www.xianguo.com/subscribe.php?url=<<?php echo $this->options->feedUrl(); ?>">					
                <?php _e('Xian Guo', 'blocks'); ?></a></li>						<li>
              <a title="<?php _e('Subscribe with ', 'blocks'); _e('Zhua Xia', 'blocks'); ?>"	href="http://www.zhuaxia.com/add_channel.php?url=<?php echo $this->options->feedUrl(); ?>">					
                <?php _e('Zhua Xia', 'blocks'); ?></a></li>						<li>
              <a title="<?php _e('Subscribe with ', 'blocks'); _e('Google', 'blocks'); ?>"	href="http://fusion.google.com/add?feedurl=<?php echo $this->options->feedUrl(); ?>">						
                <?php _e('Google', 'blocks'); ?></a></li>						<li>
              <a title="<?php _e('Subscribe with ', 'blocks'); _e('My Yahoo!', 'blocks'); ?>"	href="http://add.my.yahoo.com/rss?url=<?php echo $this->options->feedUrl(); ?>">							
                <?php _e('My Yahoo!', 'blocks'); ?></a></li>						<li>
              <a title="<?php _e('Subscribe with ', 'blocks'); _e('newsgator', 'blocks'); ?>"	href="http://www.newsgator.com/ngs/subscriber/subfext.aspx?url=<?php echo $this->options->feedUrl(); ?>">	
                <?php _e('newsgator', 'blocks'); ?></a></li>						<li>
              <a title="<?php _e('Subscribe with ', 'blocks'); _e('Bloglines', 'blocks'); ?>"	href="http://www.bloglines.com/sub/<?php echo $this->options->feedUrl(); ?>">								
                <?php _e('Bloglines', 'blocks'); ?></a></li>						<li>
              <a title="<?php _e('Subscribe with ', 'blocks'); _e('iNezha', 'blocks'); ?>"	href="http://inezha.com/add?url=<?php echo $this->options->feedUrl(); ?>">									
                <?php _e('iNezha', 'blocks'); ?></a></li>					
            </ul>			
          </div>			 			
         <!-- <span id="copyright">				Copyright &copy; 2008-2009 Theme Demo	 			
          </span>-->			
          <div class="fixed">
          </div>		
        </div>	
      </div>	
      <!-- header END -->	
      <!-- content START -->	
      <div id="content">		
        <!-- main START -->		
        <div id="main">