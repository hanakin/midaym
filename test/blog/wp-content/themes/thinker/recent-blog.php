		<?php
            $recentBlog = new WP_Query();
            $recentBlog -> query('showposts=5&cat='.BLOG);
            while($recentBlog -> have_posts()) : $recentBlog -> the_post();
		?>
		<li>
			<a href="<?php the_permalink(); ?>" title="midaym.com | From The Blog: <?php the_title(); ?>"><?php the_title(); ?></a>
			<small><?php the_time('M d'); ?> - <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?></small>
		</li>
		<?php endwhile; ?>