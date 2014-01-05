	    <footer>
            <section class="grid">
                <article class="bottom grid-row">
                    <div class="bottom-copyright grid-s-12 grid-m-7">
                        &copy; Copyright 2013 MIDAYM. All Right Reserved.</span>
                        <ul class="bottom-social list-inline">
                            <li><a href="http://www.flickr.com/photos/midaym/" title="Flickr"><i class="icon icon-flickr"></i></a></li>
                            <li><a href="https://twitter.com/midaym" title="Twitter"><i class="icon icon-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/Midaymcom" title="Facebook"><i class="icon icon-facebook"></i></a></li>
                            <li><a href="https://github.com/hanakin" title="Github"><i class="icon icon-github"></i></a></li>
                            <li><a href="http://www.linkedin.com/pub/mike-miday/16/694/4ba" title="Linked In"><i class="icon icon-linkedin"></i></a></li>
                            <li><a href="https://plus.google.com/105826784814723673348" title="Google+"><i class="icon icon-google"></i></a></li>                                        
                        </ul>
                    </div>
                    
                    <ul class="bottom-menu grid-s-12 grid-m-4 list-inline">
                        <li>
                        	<?php if($filename=='archives') { ?>
	                        Archives
	                        <?php } else { ?>
                        	<a href="<?php echo $blog_url ?>/archives" title="Archives">Archives</a>
                        	<?php } ?>
                        </li>
                        <li>
                        	<?php if($filename=='about') {?>
	                        About
	                        <?php } else { ?>
                        	<a href="<?php echo $blog_url ?>/about" title="About">About</a>
                        	<?php } ?>
                        </li>
                        <li>
                        	<?php if($filename=='contact') {?>
	                        Contact
	                        <?php } else { ?>
                        	<a href="<?php echo $blog_url ?>/contact" title="Contact">Contact</a>
                        	<?php } ?>
                        </li>                                     
                    </ul>
                    <p class="bottom-logo grid-s-12 grid-m-1"><a href="<?php echo $blog_url ?>" title="Midaym"><i class="icon icon-midaym1"></i></a></p>
                </article>
            </section>
        </footer>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script> 
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <?php echo stripslashes($tracking_code) ?>

    </body>
</html>