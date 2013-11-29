<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>

		<div id="content" class="span-24 blog"><!-- @start Content -->
		
			<div id="main"><!-- @start Main -->
				<?php query_posts("cat=".BLOG); ?>
				
				<?php if (have_posts()) : ?>

					<?php while (have_posts()) : the_post(); ?>

				<?php $image = get_post_meta($post->ID, 'image', true); ?>
				<div>
					<?php if ($image) : ?>
						<a href="" title="midaym.com | From The Blog: <?php the_title(); ?>"><img src="<?php echo UPLOADS; ?><?php echo $image; ?>" alt="midaym.com | From The Blog: <?php the_title(); ?>"></a>
					<?php else : ?>
						<a href="" title="midaym.com | From The Blog: <?php the_title(); ?>"><img src="<?php echo UPLOADS; ?>default-blogpost.jpg" alt="midaym.com | From The Blog: <?php the_title(); ?>"></a>
					<?php endif ?>
					<em>
						<span><?php the_time('d'); ?></span>
						<small><?php the_time('M'); ?></small>
					</em>
					<h2><a href="<?php the_permalink(); ?>" title="midaym.com | From The Blog: <?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<?php the_content('Read More...'); ?>
					<pre><dfn>Posted in:  <?php mm_list_cats(' ,  ', FEATURED); ?> by Mike Miday</dfn><span><?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?></span></pre>
				</div>
				
					<?php endwhile ?>
				
<?php include (TEMPLATEPATH . '/paging.php'); ?>
				
				<?php else : ?>
            
                    <h2 class="center">Not Found</h2>
                    <p class="center">Sorry, but you are looking for something that isn't here.</p>
                    <?php include (TEMPLATEPATH . '/searchform.php'); ?>	
            
                <?php endif ?>

			</div><!-- @end Main -->
			
<?php get_sidebar('blog'); ?>		
			
		</div><!-- @end Content -->
		
<?php get_footer(); ?>