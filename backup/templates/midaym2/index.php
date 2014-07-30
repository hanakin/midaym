<!DOCTYPE html>
<html>
    <head>
    	<title><?php echo $site_title ?></title>
        
        <meta name="description" content="<?php echo $meta_description ?>">
        <meta name="author" content="<?php echo $author ?>">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- // <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script> -->
        <link rel="stylesheet" href="<?php echo $template_dir_url ?>assets/css/style.css">
                
        <link rel="shortcut icon" href="<?php echo $template_dir_url ?>favicon.png">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <script src="<?php echo $template_dir_url ?>js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
    <div class="wrapper">
                
		<?php echo $content ?>

        