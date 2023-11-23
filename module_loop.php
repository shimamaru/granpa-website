<section class="works">
	<div class="works__list">
		<?php if (have_posts()) :?>		
		  <ul class="col">
		 		<?php while (have_posts()) : the_post(); ?>
		    	<li>
		    		<a href="<?php the_permalink() ?>">
		      		<div>
		    				<?php if(has_post_thumbnail()):?>
									<p class="thumb"><?php echo get_the_post_thumbnail($post->ID, 'full');?></p>
									<?php endif;?>
		          </div>
		          </a>
		        </li>
		    	<?php endwhile; ?>
		  </ul> 
		<?php else: ?>
			<div class="inner">
		  <p>該当する投稿は見つかりませんでした。</p>
		  </div>
		<?php endif; ?>
	</div>
</section>