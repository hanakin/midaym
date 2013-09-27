<?php

// Fetch the current url.
$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') === FALSE ? 'http' : 'https';
$host = $_SERVER['HTTP_HOST'];
$script = $_SERVER['SCRIPT_NAME'];
$params = $_SERVER['QUERY_STRING'];
$current_url = $protocol . '://' . $host . $script . '?' . $params;
$url = str_replace('/index.php?filename=', '', $current_url);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Let's Get Started</title>
        <link rel="stylesheet" href="../style/style.css" />
        <link rel="shortcut icon" href="../style/images/favicon.png">
    </head>
    
    <body>
        <img src="../style/images/logo.png" alt="Dropplets" />
        
        <h1>Let's Get Started</h1>
        <p>With Dropplets, there's no database or confusing admins to worry about, just simple markdown blogging goodness. To get started, enter your site information below (all fields are required) and then click the check mark at the bottom. That's all there's to it :)</p>
        
		<form method="POST" action="../config/submit-settings.php">
		    <fieldset>
		        <div class="input">
		            <input type="text" name="blog_email" id="blog_email" required placeholder="The Email Address for Your Blog">
		        </div> 
		        
		        <div class="input">
		            <input type="text" name="blog_twitter" id="blog_twitter" required placeholder="The Twitter ID for Your Blog (e.g. &quot;dropplets&quot;)">
		        </div> 
		    </fieldset>
		    
		    <fieldset>
    		    <div class="input hidden">
    		        <input type="text" name="blog_url" id="blog_url" required readonly value="<?php echo($url) ?>">
    		    </div>
    		    
    		    <div class="input">
    		        <input type="text" name="blog_title" id="blog_title" required placeholder="Your Blog Title">
    		    </div>
    		    
    		    <div class="input">
    		        <textarea name="meta_description" id="meta_description" rows="6" required placeholder="Add your site meta description here... just a short sentence that describes what your blog is going to be about."></textarea>
    		    </div> 
		    </fieldset>
		    
		    <fieldset>
    		    <div class="input">
    		        <input type="text" name="intro_title" id="intro_title" required placeholder="Your Intro Title">
    		    </div> 
    		    
    		    <div class="input">
    		        <textarea name="intro_text" id="intro_text" rows="12" required placeholder="Add your intro text here. The &quot;intro&quot; displayed at the top of the home page of your blog and is generally intended to introduce who you are to your readers, kind of like an &quot;about&quot; page."></textarea>
    		    </div> 
		    </fieldset>

		    <fieldset>
    		    <div class="input">
    		        <input type="text" name="about_title" id="about_title" required placeholder="Your About Page Title">
    		    </div> 
    		    
    		    <div class="input">
    		        <textarea name="about_tag" id="about_tag" rows="6" required placeholder="Add your tagline. The &quot;intro&quot; displayed at the top of the about page of your blog and is generally intended to introduce the content"></textarea>
    		    </div> 
		    </fieldset>

		    <fieldset>
    		    <div class="input">
    		        <input type="text" name="contact_title" id="contact_title" required placeholder="Your Contact Page Title">
    		    </div> 

    		    <div class="input">
    		        <textarea name="contact_tag" id="contact_tag" rows="6" required placeholder="Add your tagline. The &quot;intro&quot; displayed at the top of the contact page of your blog and is generally intended to introduce the content"></textarea>
    		    </div> 
		    </fieldset>
		    
		    <fieldset>
    		    <div class="input">
    		        <input type="password" name="password" id="password" required placeholder="Enter a Password">
    		    </div>
    		    
    		    <div class="input">
    		        <textarea name="tracking_code" id="tracking_code" rows="12" placeholder="If you're using Google Analytics or some other analytics solution, paste your tracking code here (optional)."></textarea>
    		    </div> 
		    </fieldset>
		    
		    <fieldset class="hidden">
		        <div class="input">
		            <input type="text" name="template" id="template" required value="midaym">
		        </div>
		    </fieldset>
		    
		    <button type="submit" name="submit" value="submit"></button>
		</form>
    </body>
</html>