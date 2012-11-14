<?php if(function_exists('stats_get_csv')) { ?>
	<?php function most_viewed() { ?>
	<h2>Mais acessados</h2>
	<ul id="popularposts">
	<?php
	    $top_posts = stats_get_csv('postviews', 'days=60&limit=13');
	    $i = 0;
	    foreach($top_posts as $post) {
			if(!get_post($post['post_id']) || empty($post['post_id']) || in_array($post['post_id'], array(2, 9, 85, 526))) continue;
			echo '<li><a href="'.get_permalink($post['post_id']).'">'.get_the_title($post['post_id']).'</a><div class="commentsnumber">'.get_comments_number($post['post_id']).' comments</div></li>';
				$i++;
			if($i >= 5) break;
		}
	?>
	</ul>
<?php }
} 
wp_register_sidebar_widget('most_viewed', 'Popular posts', 'most_viewed'); 

function subscribe_icon_widget() { 
?>	
<h2>Assine/Recomende</h2>
<ul>
    <li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('RSS 2.0'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/feed-icon.png" alt="RSS 2.0" title="RSS 2.0" /></a>&nbsp;<a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('RSS 2.0'); ?>">RSS 2.0</a></li>
    <li><g:plusone size="medium" href="<?php echo home_url( '/' ); ?>"></g:plusone></a>
</ul>
<?php
} 
wp_register_sidebar_widget('most_viewed', 'Subscribe Icon', 'subscribe_icon_widget'); 
?>	
