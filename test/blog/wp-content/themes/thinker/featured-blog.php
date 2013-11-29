		<?php
            $featured = new WP_Query();
            $featured -> query('showposts=5&cat='.FEATURED);
            while($featured -> have_posts()) : $featured -> the_post();
		?>
		<li>
			<a href="<?php the_permalink(); ?>" title="midaym.com | Featured From The Blog: <?php the_title(); ?>"><?php the_title(); ?></a>
		</li>
		<?php endwhile; ?>