<?php get_header(); ?>

<div id="bigcontainer">

	<div id="postcontainer">
		<?php if(have_posts()): ?><?php while(have_posts()): the_post(); ?>

		
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title();?></a></h2>
			<div class="entry">
			<?php the_content('<br/><span class="moretext">Leia mais &raquo; &raquo; </span>'); ?>
			<p class="postmetadata">

                         <?php the_date() ?><?php _e(' &#124; '); ?> <?php the_category(', ') ?><br />
                       		
	<?php comments_popup_link('Sem comentários &#187;', '1 comentário &#187;', '% comentários &#187;'); ?> <?php edit_post_link('Editar', ' &#124; ', ''); ?>
			</p>
		</div>
		</div>
		
		<?php endwhile; ?>

		
		<div class="navi">
			<?php posts_nav_link(); ?>
		</div>
			<?php else: ?>
				<div class="post">
					<h2><?php _e('Não encontrado'); ?></h2>
				</div>


		<?php endif; ?>
	</div>	


</div>
<?php get_sidebar(); ?>


<?php get_footer(); ?>

