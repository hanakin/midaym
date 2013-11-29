		<div class="span-24 home" id="footer"><!-- @start Footer -->
		
			<div class="nofloat hd span-24"><!-- @start Footer HD -->
				<div class="span-6 last" id="recent-news"><!-- @start Recent News -->
					<h2>Recent News</h2>
					<ul class="noul">
<?php include (TEMPLATEPATH . '/recent-news.php'); ?>
					</ul>
				</div><!-- @end Recent News -->
				
				<div class="span-7 push-1" id="recent-blog"><!-- @start Recent Blog -->
					<h2>From The Blog</h2>
					<ul>
<?php include (TEMPLATEPATH . '/recent-blog.php'); ?>
					</ul>
				</div><!-- @end Recent Blog -->
				
				<div class="span-7 push-1" id="wedo"><!-- @start What We Do -->
					<h2>What I Do</h2>
						<p>I create stunning visually appealing web sites. Each built on the award winning wordpress back-end system. I do everything from design to standard compliant Search Engine Optimized xhtml to back-end development.</p>
						<p>Every site I design comes with its very own Content Management System and blog with an easy to use interface. I customize the installation of each Content Management System to meet your individual needs.</p>
						<p><span><a href="http://www.midaym.com/contact/">Request A Quote</a></span></p>
				</div><!-- @end What We Do -->
				
				<div class="span-7 last push-1" id="recent-work"><!-- @start Recent Work -->
					<h2>Recent Work</h2>
					<ul class="noul">
<?php include (TEMPLATEPATH . '/recent-work.php'); ?>
					</ul>
				</div><!-- @end Recent Work -->
				
			</div><!-- @end Footer HD -->
			
			<div class="clear bd"><!-- @start Footer BD -->
				<div class="span-11" id="toolbar">
					<ul class="noul"><!-- @start Toolbar -->
						<li class="apple"><a tagrget="_blank" href="http://www.apple.com" title="Apple"><span class="popup">Apple</span></a></li>
						<li class="adobe"><a tagrget="_blank" href="http://www.adobe.com" title="Adobe"><span class="popup">Adobe</span></a></li>
						<li class="coda"><a tagrget="_blank" href="http://www.panic.com/coda5187" title="Coda"><span class="popup">Coda</span></a></li>
						<li class="textmate"><a tagrget="_blank" href="http://macromates.com/" title="Textmate"><span class="popup">Textmate</span></a></li>
						<li class="cssedit"><a tagrget="_blank" href="http://www.macrabbit.com/cssedit/" title="CSSEdit"><span class="popup">CSSEdit</span></a></li>
						<li class="wp"><a tagrget="_blank" href="http://www.wordpress.org" title="Wordpress"><span class="popup">Wordpress</span></a></li>
						<li class="title"><span>} midaym.com Toolbar</span></li>
					</ul><!-- @end Toolbar -->
				</div>
				<div class="span-10 last prepend-3" id="copyright">
					<ul class="noul"><!-- @start Copyright -->
						<li class="title"><span>Copyright &copy; 2009 midaym.com. All Rights Reserved.</span></li>
						<li class="icon"><a href="<?php bloginfo('home'); ?>" title="midaym.com | Home of Freelance Designer Mike Miday"><span class="popup">midaym</span></a></li>
					</ul><!-- @end Copyright -->
				</div>
			</div><!-- @end Footer BD -->
			
			<div class="clear ft"><!-- @start Footer FT -->
			
				<ul id="meta"><!-- @start Meta -->
					<li><a href="<?php bloginfo('url'); ?>/sitemap.xml" title="midaym: Sitemap">Sitemap</a></li>
					<li>|</li>
					<li><a tagrget="_blank" href="http://validator.w3.org/check?uri=referer" title="midaym: Validate Xhtml">Xhtml</a></li>
					<li>|</li>
					<li><a tagrget="_blank" href="http://jigsaw.w3.org/css-validator/check/referer" title="midaym: Validate CSS">CSS</a></li>
					<li>|</li>
					<li><a href="<?php bloginfo('rss2_url'); ?>" title="midaym: RSS">RSS</a></li>	
				</ul><!-- @end Meta -->
				
			</div><!-- @end Footer FT -->
			
		</div><!-- @end Footer -->
		
	</div><!-- @end Container -->

<!-- @start Scripts -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<!--<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery-1.3.2.min.js" type="text/javascript" charset="utf-8"></script>-->
<script src="<?php bloginfo('template_directory'); ?>/scripts/jq.css.preload.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.cycle.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.ifixpng.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.fancyzoom2.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.newsScroller.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.shadow.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/dynamics.js" type="text/javascript" charset="utf-8"></script>
<!-- @end Scripts -->
</body>
</html>