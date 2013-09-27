<div id="sidebar"><!-- @start Sidebar -->
	<div>
		<h2>News Archives</h2>
		<?php
			$recentNews = new WP_Query();
        	$recentNews -> query('showposts=3&cat='.NEWS);
			if($recentNews -> have_posts()) :
		?>
		<ol>
			<?php 
				while($recentNews -> have_posts()) : $recentNews -> the_post();
		
					$wp_query->in_the_loop = true; // This line is added so that the_tags('') will work outside the regular loop.
					$recentNews_ID = $post->ID; // We'll store this here so that we know to skip this post in the main loop
					$thumb = get_post_meta($post->ID, 'thumb', true);
			?>
				<?php if ($currentID == $post->ID) :?>
			<li class="selected">
				<?php else : ?>
			<li>
				<?php endif ?>
				<?php if ($thumb) : ?>
				<a href="<?php the_permalink(); ?>" title="midaym.com | Recent News: <?php the_title(); ?>"><img src="<?php echo NEWSUP; ?><?php echo $thumb; ?>" width="66" height="65" alt="Recent News: <?php the_title(); ?>" />
				<?php else : ?>
				<a href="<?php the_permalink(); ?>" title="midaym.com | Recent News: <?php the_title(); ?>"><img src="images/news-logo.jpg" width="66" height="65" alt="Recent News: <?php the_title(); ?>" />
				<?php endif ?>
					<h3><?php the_title(); ?></h3>
					<p><?php echo string_limit_words($post->post_excerpt, 10); ?>...</p>
				</a>
			</li>
			<?php endwhile ?>
		</ol>
		<?php else : ?>
		<p>Sorry There are no posts</p>
		<?php endif ?>
	</div>	
</div><!-- @end Sidebar -->
