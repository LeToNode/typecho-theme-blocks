<?php include('header.php');?>

	<div class="post">
		<h3 class="title"><?php $this->title() ?></h3>

		<div class="content">
			<?php  
				if ( $this->_archiveSlug == 'Photos' )
				{
						Yupoo_Plugin::output($this->options->row['siteUrl']);
				}else if($this->_archiveSlug == 'Downloads'){
						Uushare_Plugin::output();
				}else{
						$this->content();
				} 
?>
			<div class="fixed"></div>
		</div>
	</div>
	<?php  
				if ( $this->_archiveSlug != 'Photos' && $this->_archiveSlug != 'Downloads' )
				{
						include('comments.php');
				}
				?>

	
		</div>
			<?php include('sidebar.php'); ?>
			<div class="fixed"></div>
			<div>
	<?php include('footer.php'); ?>
