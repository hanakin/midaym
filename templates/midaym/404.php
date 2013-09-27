		<section class="<?= echo $post_class." ".$post_status; ?>">
	        <div class="container">
	            <div class="row">
	                <article class="span7">
	                    <hgroup>
	                        <h2><?php echo $post_title ?></h2>
	                    </hgroup>
	                    <?php echo $post_intro ?>
	                    <a href="<?php echo $post_link ?>" class="pill-light">Finish Reading!</a>
	            	</article>
	            	<aside class="span4 offset1">
	                	<img src="<?php echo $post_image ?>" alt="<?php echo $post_title ?>" />
	            	</aside>
	            </div>
	        </div>
	    </section>