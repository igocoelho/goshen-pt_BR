<div class="sidebar">
<div class="sidehead">
    <h1><a style="text-decoration: none; color: #000000;" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
</div>
<div class="sidedrophead">
    <?php bloginfo('description'); ?>
</div>
<br/>
<div id="sidebar-widgetized-area">
	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar-widgetized-area')) : else : ?>
	<?php endif; ?>
</div>
<br/>
</div>
