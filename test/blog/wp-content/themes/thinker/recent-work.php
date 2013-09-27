		<?php
           	$recentWork = new WP_Query();
           	$recentWork -> query('showposts=2&cat='.WEB);
           	while($recentWork -> have_posts()) : $recentWork -> the_post();
				
				$wp_query->in_the_loop = true; // This line is added so that the_tags('') will work outside the regular loop.
				$recentWork_ID = $post->ID; // We'll store this here so that we know to skip this post in the main loop
				$recent = get_post_meta($post->ID, 'recent', true);
				$full = get_post_meta($post->ID, 'full', true);
				
        ?>
		<li>
			<?php if ($recent) { ?>
			<a class="zoom" href="<?php echo WORK; ?><?php echo $full; ?>" title="midaym.com: <?php the_title(); ?>"><img src="<?php echo WORK; ?><?php echo $recent; ?>" width="244" height="111" alt="midaym.com: <?php the_title(); ?>" /><span><?php the_title(); ?></span></a>
			<?php } else { ?>
			<a class="zoom" href="<?php echo WORK; ?>midaym-full.jpg" title="midaym.com: Midaym"><img src="<?php echo WORK; ?>midaym-recent.jpg" width="244" height="111" alt="midaym.com: Midaym" /><span>Midaym</span></a>
			<?php }?>
		</li>
		<?php endwhile ?>