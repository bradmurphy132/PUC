<div id="master">
<header>
	
	<a href="<?php echo home_url(); ?>"><div id="logo"><img src="<?php bloginfo('template_directory'); ?>/IMAGES/Uniting church symbol 100px_nobackground.png"</div></a>
	<?php bloginfo( 'description' ); ?>
	<div class="menu"><ul> <?php wp_list_pages('title_li=&sort_column=post_date'); ?></ul></div>
</header>
