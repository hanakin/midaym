<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>
		
		<div id="content" class="span-24 contact"><!-- @start Content -->
			<h1>Contact Me</h1>
			<h3>Questions? Concerns? Comments?</h3>
			<div id="main"><!-- @start Main -->
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<div>
					<?php the_content(); ?>
					<?php endwhile ?>	
                    <?php else : ?>
                
                        <h2 class="center">Not Found</h2>
                        <p class="center">Sorry, but you are looking for something that isn't here.</p>
                        <?php include (TEMPLATEPATH . '/searchform.php'); ?>	
                
                    <?php endif; ?>
				</div>
			</div><!-- @end Main -->
				
		</div><!-- @end Content -->

<?php get_footer(); ?>		