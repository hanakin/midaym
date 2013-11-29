<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
	<!-- Meta -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />	
	<meta name="copyright" content="&copy; 2009 Mike Miday" />
	<meta name="author" content="Mike Miday" />
	<meta name="robots" content="index,follow" />
	<meta name="revisit-after" content="15 days" />
	<meta name="cache-control" content="no-cache">
	<META HTTP-EQUIV="Expires" CONTENT="<?php echo expires(date("D j M Y G:i:s T"),15); ?>">
	<meta name="keywords" content="midaym, Mike Miday, mike miday, freelance, design, php, xhtml, web design, wordpress, professional, creative, clean, seo, optimised" />
	<meta name="description" content="midaym.com is the website and blog for freelance designer Mike Miday. I specialize in clean coded beautiful designs powered on the award winning wordpress backend system." />
	
    <title><?php
	if(is_home()) {
		echo bloginfo('name').' - Home';
	} elseif(is_category()) {
		echo 'Browsing the Category ';
		wp_title(' ', true, '');
	} elseif(is_archive()){
		echo 'Browsing Archives of';
		wp_title(' ', true, '');
	} elseif(is_search()) {
		echo 'Search Results for "'.$s.'"';
	} elseif(is_404()) {
		echo '404 - Page got lost!';
	} else {
		bloginfo(ënameí); wp_title('-', true, '');
	}
	?></title>
	<!-- Site CSS -->
	<link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet" type="text/css" media="screen" />
	<!--[if gt IE 6]>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie.css" type="text/css" media="screen" />
	<![endif]-->
	
	<!-- Wordpress Links -->
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
	<?php wp_head(); ?>

	</head>

	<body>
		<div class="container"><!-- @start Container -->

			<div id="newsheader" class="span-24"><!-- @start Header -->
				<a id="logo" href="http://www.midaym.com" title="midaym | Freelance Designer">midaym | Freelance Designer</a>

				<ul id="nav"><!-- @start Nav -->
	            	<?php wp_list_pages('title_li='); ?>
				</ul><!-- @end Nav -->

			</div><!-- @end Header -->