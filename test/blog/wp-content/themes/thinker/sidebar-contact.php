<div id="text_column">
<h2 id="text_title">Latest News</h2>
	<div class="separator"></div>
	<?php
        $recent = new WP_Query();
        $recent -> query('showposts=3&cat='.NEWS);
        while($recent -> have_posts()) : $recent -> the_post();
    ?>
          <big><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></big>
          <?php the_excerpt(); ?>
          <div class="separator"></div>
    <?php endwhile; ?>

</div>