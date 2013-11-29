	<?php
	$hr = false;
	$url	= get_post_meta($post->ID, 'url', true);
	$main	= get_post_meta($post->ID, 'main', true);
	$full	= get_post_meta($post->ID, 'full', true);
	$xhtml	= get_post_meta($post->ID, 'xhtml', true);
	$css	= get_post_meta($post->ID, 'css', true);
	$design	= get_post_meta($post->ID, 'design', true);
	$cms	= get_post_meta($post->ID, 'cms', true);
	
	$skills	= '';
	
	if($design && $design == 1) { $skills .= 'Design'; }
	
	if($xhtml && $xhtml == 1) {
		if($design && $design == 1) {
			$skills .= ' | Xhtml';
		} else {
			$skills .= 'Xhtml';
		}
	}
	
	if($css && $css == 1) {
		if($design && $design == 1) {
			$skills .= ' | CSS';
		} elseif($xhtml && $xhtml == 1) {
			$skills .= '| CSS';
		} else {
			$skills .= 'CSS';
		}
	}
	
	if($cms && $cms == 1) {
		if($design && $design == 1) {
			$skills .= ' | CMS';
		} elseif($xhtml && $xhtml == 1) {
			$skills .= '| CMS';
		} elseif($css && $css == 1) {
			$skills .= '| CMS';
		} else {
			$skills .= 'CMS';
		}
	}
	
	if ($hr == true) { echo '<hr />'; }
	?>
	<div><!-- @start Work Item -->
		<em><a class="zoom" href="<?php echo WORK; ?><?php echo $full; ?>" title="<?php the_title(); ?>: <?php if($skills != '') { echo $skills . ': '; } ?> by midaym.com"><img src="<?php echo WORK; ?><?php echo $main; ?>" alt="<?php the_title(); ?>: <?php if($skills != '') { echo $skills . ': '; } ?> by midaym.com"><pre><span><?php the_title(); ?></span><dfn><?php echo $skills; ?></dfn></pre></a></em>
		<blockquote>
			<h2><?php the_title(); ?></h2>
			<?php the_excerpt(); ?>
			<?php if (get_post_meta($post->ID, 'url', true)) { ?>
			<span><a target="_blank" href="<?php echo $url; ?>" title="Visit <?php the_title(); ?>">Visit <?php the_title(); ?></a></span>
			<?php } ?>
		</blockquote>
	</div><!-- @end Work Item -->
	<hr />
	<?php $hr = true; ?>