<div class="wrapper wrp-page-title">
	<div class="container">
		<?php
		$about_page_title = get_field('page_main_title',get_the_ID());
		if(!empty($about_page_title)){
			?><h1 class="page-title"><?php echo  $about_page_title; ?></h1><?php
		}else{
			?><h1 class="page-title"><?php echo  get_the_title(get_the_ID()); ?></h1><?php
		}
		?>
	</div>
</div>