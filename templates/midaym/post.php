<section class="single">
    <div class="container">
	    <div class="row">
	    	<article class="span7">
	        	<hgroup>
	        	    <h2><?php echo $post_title ?></h2>
	        	</hgroup>
	        	<?php echo $post ?>
		    </article>
            <aside class="span4 offset1">
            	<span class="date"><?php echo $published_date ?></span>
		        <a class="pill-light" href="https://twitter.com/intent/tweet?screen_name=<?php echo $post_author_twitter ?>&text=Re:%20<?php echo $post_link ?>%20" data-dnt="true">Comment on Twitter</a>
		    	</br>
	            <a class="pill-light" href="https://twitter.com/intent/tweet?text=&quot;<?php echo $post_title ?>&quot;%20<?php echo $post_link ?>%20via%20&#64;<?php echo $post_author_twitter ?>" data-dnt="true">Share on Twitter</a>
	            </br>
	            <a class="pill-light" href="<?php echo $blog_url ?>">More Articles</a>
            
	            <script>
	            	!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
	            </script>
		    </aside>
        </div>
    </div>
</section>
