<?php
if ($wp_version >= 2.8) require_once(TEMPLATEPATH.'/widgets.php');
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Sidebar',
		'id'   => 'sidebar-widgetized-area',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	));
}
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Footer',
		'id'   => 'footer-widgetized-area',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	));
}
?>