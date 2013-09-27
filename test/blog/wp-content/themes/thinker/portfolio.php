<?php
/*
Template Name: Portfolio
*/
?>	
<?php get_header(); ?>
	<!--  Breadcrumb -->
    <div style="padding-bottom:5px;">
	<?php if($parent == BLOG): ?>
			<em><a href="<?php bloginfo('url'); ?>">Home</a> > <a href="<?php bloginfo('url'); ?>/category/blog">Blog</a> > <?php wp_title(' ', true, ''); ?></em>
	<? elseif($parent == PORTFOLIO): ?>
			<em><a href="<?php bloginfo('url'); ?>">Home</a> > <a href="<?php bloginfo('url'); ?>/portfolio">Portfolio</a> > <?php wp_title(' ', true, ''); ?></em>
	<? else: ?>
			<em><a href="<?php bloginfo('url'); ?>">Home</a> > <?php wp_title(' ', true, ''); ?></em>
	<? endif; ?>
	</div>
	<!--  #End Breadcrumb -->

	<div id="block_content">

        	<div id="content_area">
				<div class="mini_portfolio_item">
					<div class="block_inside">
						<small>* Click Image To Enlarge or Follow Link To Full Post</small>
						<h2>Modeling</h2>
						<?php query_posts("showposts=999999&cat=".MODELING); ?>
						
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
						
							<div class="portfolio_thumb_block">
								<a href="<?php bloginfo('url'); ?>/wp-content/uploads/<?php the_time('Y'); ?>/<?php the_time('m'); ?>/<?php echo get_post_meta($post->ID, 'image_1', true); ?>" title="<?php the_title(); ?>"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/<?php the_time('Y'); ?>/<?php the_time('m'); ?>/<?php echo get_post_meta($post->ID, 'thumbnail_1', true); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" /></a>
								<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
	                        </div>

					<?php endwhile ?>
					
					<?php else : ?>
					
					<?php endif; ?>
							<div style="clear:both"></div>
							<h2>Paintings</h2>
							<?php query_posts("showposts=999999&cat=".PAINTING); ?>
					
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
						
							<div class="portfolio_thumb_block">
								<a href="<?php bloginfo('url'); ?>/wp-content/uploads/<?php the_time('Y'); ?>/<?php the_time('m'); ?>/<?php echo get_post_meta($post->ID, 'image_1', true); ?>" title="<?php the_title(); ?>"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/<?php the_time('Y'); ?>/<?php the_time('m'); ?>/<?php echo get_post_meta($post->ID, 'thumbnail_1', true); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" /></a>
								<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
	                        </div>

					<?php endwhile ?>
					
					<?php else : ?>
					
					<?php endif; ?>
							<div style="clear:both"></div>
							
					<?php query_posts("showposts=999999&cat=".SKETCHES); if(have_posts()) : ?>
							<h2>Scketches</h2>
					
					<?php while(have_posts()) : the_post(); ?>
						
							<div class="portfolio_thumb_block">
								<a href="<?php bloginfo('url'); ?>/wp-content/uploads/<?php the_time('Y'); ?>/<?php the_time('m'); ?>/<?php echo get_post_meta($post->ID, 'image_1', true); ?>" title="<?php the_title(); ?>"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/<?php the_time('Y'); ?>/<?php the_time('m'); ?>/<?php echo get_post_meta($post->ID, 'thumbnail_1', true); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" /></a>
								<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
	                        </div>

					<?php endwhile ?>
					<?php else : ?>
                    <?php endif; ?>

					</div>
            	</div>
            </div>
            <?php get_sidebar('portfolio'); ?>

             <!-- a Clearing DIV to clear the DIV's because overflow:auto doesn't work here -->
             <div style="clear:both"></div>

        	</div>
       	</div>
    </div>
	<?php get_footer(); ?>
</body>
</html>

