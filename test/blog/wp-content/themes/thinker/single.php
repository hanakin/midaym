<?php get_header('news'); ?>
<?php 
	$currentID = $post->ID; 
?>
		    <div id="content" class="span-24 news"><!-- @start Content -->

				<div id="main"><!-- @start Main -->
					<h1>The News</h1>
					<h3>What's currently happening</h3>
		                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
							<?php 
								$currentID = $post->ID;
								$thumb = get_post_meta($post->ID, 'thumb', true);
							 ?>
									<div>
										<em>
											<span><?php the_time('d'); ?></span>
											<small><?php the_time('M'); ?></small>
										</em>
										<blockquote>
											<h2><?php the_title(); ?><abbr>by <?php the_author(); ?></abbr></h2>
											<?php the_content(); ?>
										</blockquote>
									</div>
		</div><!-- @end Main -->
		<div id="sidebar"><!-- @start Sidebar -->
			<div>
				<h2>News Archives</h2>
			<ol>
				<li class="selected">
					<div>
						<?php if (get_post_meta($post->ID, 'thumb', true)) : ?>
						<img src="<?php echo NEWSUP; ?><?php echo $thumb; ?>" width="66" height="65" alt="Recent News: <?php the_title(); ?>" />
						<?php else : ?>
						<img src="<?php echo NEWSUP; ?>news-logo.jpg" width="66" height="65" alt="Recent News: <?php the_title(); ?>" />
						<?php endif ?>
						<h3><?php the_title(); ?></h3>
						<p><?php echo string_limit_words($post->post_excerpt, 10); ?>...</p>
					</div>
				</li>
			</ol>
				<?php endwhile; ?>
                <?php else: ?>

					<p>There are no posts to display.</p>
				</div><!-- @end Main -->
				<div id="sidebar"><!-- @start Sidebar -->
					<div>
						<h2>News Archives</h2>
					<ol>
                <?php endif; ?>
				<?php
					$recentNews = new WP_Query();
		        	$recentNews -> query('showposts=10&cat='.NEWS);
					if($recentNews -> have_posts()) :
				?>
				<ol id="newsscroller">
					<?php 
						while($recentNews -> have_posts()) : $recentNews -> the_post();

							$wp_query->in_the_loop = true; // This line is added so that the_tags('') will work outside the regular loop.
							$recentNews_ID = $post->ID; // We'll store this here so that we know to skip this post in the main loop
							$thumb = get_post_meta($post->ID, 'thumb', true);
					?>
					<?php 
						if($currentID == $recentNews_ID) :
							//do nothing
						
						else :
					?>
					<li>
						<div>
							<?php if ($thumb) : ?>
							<a href="<?php the_permalink(); ?>" title="midaym.com | Recent News: <?php the_title(); ?>"><img src="<?php echo NEWSUP; ?><?php echo $thumb; ?>" width="66" height="65" alt="Recent News: <?php the_title(); ?>" />
							<?php else : ?>
							<a href="<?php the_permalink(); ?>" title="midaym.com | Recent News: <?php the_title(); ?>"><img src="<?php echo NEWSUP; ?>news-logo.jpg" width="66" height="65" alt="Recent News: <?php the_title(); ?>" />
							<?php endif ?>
								<h3><?php the_title(); ?></h3>
								<p><?php echo string_limit_words($post->post_excerpt, 10); ?>...</p>
							</a>
						</div>
					</li>
					<?php endif ?>
					<?php endwhile ?>
				</ol>
				<?php else : ?>
				<p>Sorry There are no posts</p>
				<?php endif ?>
			</div>	
		</div><!-- @end Sidebar -->
		</div><!-- @end Content -->
<?php get_footer(); ?>