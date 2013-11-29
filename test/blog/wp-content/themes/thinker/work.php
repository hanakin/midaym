<?php
/*
Template Name: Work
*/
?>
<?php get_header(); ?>
		
		<div id="content" class="span-24 work"><!-- @start Content -->
		
			<div id="main" class="tabmenu"><!-- @start Main -->
				<h1>My Work</h1>
				<h3>* Click an image to see full size version</h3>
				<!--
				<ul class="span-14 last prepend-9 tab"> --><!-- @start Work Nav -->
				<!--<li><a href="#web" title="Web">Web</a></li>
					<li><a href="#print" title="Print">Print</a></li>
					<li><a href="#branding" title="Branding">Branding</a></li>
					<li class="no-border"><a href="#photography" title="Photography">Photography</a></li>
					<li class="no-border"><a href="#vfx" title="VFX">VFX</a></li> --><!--
				</ul>--><!-- @end Work Nav -->
				
				<div id="web"><!-- @start Web -->
					<?php query_posts("showposts=99&cat=".WEB); ?>

					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<?php include(TEMPLATEPATH.'/work-post.php'); ?>
				<?php endwhile; ?>
				<?php else : ?>
            
                    <p class="none">I am currently working on adding this section, so check back soon</p>
            
                <?php endif ?>
				</div><!-- @end Web-->
				
			</div><!-- @end Main -->
			
		</div><!-- @end Content -->
		
<?php get_footer(); ?>