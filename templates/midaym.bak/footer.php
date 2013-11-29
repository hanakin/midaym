		<footer>
	        <div class="container">
	              <div class="row">
	                <div class="span5">
	                    <p class="copyright">
	                        &copy; Copyright 2013 <a href="#"><strong><i class="icon-midaym"></i>MIDAYM</strong></a>. <span class="desk">All Right Reserved.</span>
	                    </p>
	                    <ul class="social">
	                        <li><a class="hide-text"href="http://www.flickr.com/photos/midaym/" title="Flickr"><i class="icon-flickr"></i></a></li>
	                        <li><a class="hide-text"href="https://twitter.com/midaym" title="Twitter"><i class="icon-twitter"></i></a></li>
	                        <li><a class="hide-text"href="https://www.facebook.com/Midaymcom" title="Facebook"><i class="icon-facebook"></i></a></li>
	                        <li><a class="hide-text"href="https://github.com/hanakin" title="Github"><i class="icon-github-2"></i></a></li>
	                        <li><a class="hide-text"href="http://www.linkedin.com/pub/mike-miday/16/694/4ba" title="Linked In"><i class="icon-linkedin"></i></a></li>
	                        <li><a class="hide-text"href="https://plus.google.com/105826784814723673348" title="Google+"><i class="icon-googleplus"></i></a></li>
	                    </ul>
	                </div>
	                <div class="span7">
	                    <nav class="pull-right">
	                        <ul>
	                            <li>
	                            	<?php if($filename==NULL) { ?>
	                            	Home
	                            	<?php } else { ?>
	                            	<a href="<?php echo $blog_url ?>">Home</a>
	                            	<?php } ?>
	                            </li>
	                            <li>
	                            	<?php if($filename=='about') {?>
	                            	About
	                            	<?php } else { ?>
	                            	<a href="<?php echo $blog_url ?>/about">About</a>
	                            	<?php } ?>	                            	
	                            </li>
	                            <li>
	                            	<?php if($filename=='contact') {?>
	                            	Contact
	                            	<?php } else { ?>
	                            	<a href="<?php echo $blog_url ?>/contact">Contact</a>
	                            	<?php } ?>	                            	
	                            </li>
	                        </ul>
	                    </nav>
	                </div>
	            </div>
	        </div>
	    </footer>