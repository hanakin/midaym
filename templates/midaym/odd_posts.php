		<section class="<?php echo $post_class." ".$post_status; ?>">
	        <div class="container">
	            <div class="row">
	                <article class="span7 odd">
	                	<p class="date"><?php echo $published_date ?></p>
	                    <hgroup>
	                        <h2><?php echo $post_title ?></h2>
	                    </hgroup>
	                    <?php echo $post_intro ?>
	                    <a href="<?php echo $post_link ?>" class="pill-light">Finish Reading!</a>
		            </article>
		            <aside class="span4 offset1">
		                <?php if($post_image) { ?>
		        			<img class="featured" src="<?php echo $post_image ?>" alt="<?php echo $post_title ?>" />
						<?php }else{ ?>
							<img class="featured" src="<?php echo $template_dir_url ?>/img/post-img-default.jpg" alt="<?php echo $post_title ?>" />
						<?php } ?>		            
					</aside>
	            </div>
	        </div>
	    </section>
