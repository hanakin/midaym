<?php

if (file_exists('./config/config-settings.php')) {

/*-----------------------------------------------------------------------------------*/
/* Debug Mode
/*-----------------------------------------------------------------------------------*/

$display_errors = false;

/*-----------------------------------------------------------------------------------*/
/* Post Cache ('on' or 'off')
/*-----------------------------------------------------------------------------------*/

$post_cache = 'off';

/*-----------------------------------------------------------------------------------*/
/* Configuration & Options
/*-----------------------------------------------------------------------------------*/

include('./config/config-settings.php');
include('./config/config-template.php');

// A few definitions.
$language = 'en-us';
$feed_max_items = '10';
$month_format = 'M';
$year_format = 'Y';
$day_format = 'd';
$date_format = 'M d, Y';
$error_title = 'Sorry, But That&#8217;s Not Here';
$error_text = 'Really sorry, but what you&#8217;re looking for isn&#8217;t here. Click the button below to find something else that might interest you.';

/*-----------------------------------------------------------------------------------*/
/* Post Configuration
/*-----------------------------------------------------------------------------------*/

$post_directory = './posts/';

if (glob($post_directory . '*.md') != false)
{
    $posts_dir = './posts/';
} else {
    $posts_dir = './welcome/';
}

define('POSTS_DIR', $posts_dir);
define('FILE_EXT', '.md');

/*-----------------------------------------------------------------------------------*/
/* Template Files
/*-----------------------------------------------------------------------------------*/

$template_dir = './templates/' . $template . '/';
$template_dir_url = $blog_url . '/templates/' . $template . '/';

// define the default locations of the template files
$index_file = $template_dir . 'index.php';
$intro_file = $template_dir . 'intro.php';
$post_start = $template_dir . 'post-start.php';
$post_file = $template_dir . 'post.php';
$post_end = $template_dir . 'post-end.php';
$odd_posts_file = $template_dir . 'odd_posts.php';
$even_posts_file = $template_dir . 'even_posts.php';
$about_file = $template_dir . 'about.php';
$contact_file = $template_dir . 'contact.php';
$archive_start = $template_dir . 'archive-start.php';
$archive_file = $template_dir . 'archives.php';
$archive_end = $template_dir . 'archive-end.php';
$footer_file = $template_dir . 'footer.php';
$not_found_file = $template_dir . '404.php';
$about_post = $template_dir . 'about.md';

/*-----------------------------------------------------------------------------------*/
/* Let's Get Started
/*-----------------------------------------------------------------------------------*/

// Display errors if there are any.
ini_set('display_errors', $display_errors);

// Get required plugins.
include_once './plugins/feedwriter.php';
include_once './plugins/markdown.php';

// Reading file names.
if (empty($_GET['filename'])) {
    $filename = 'home';
} else if($_GET['filename'] == 'rss' || $_GET['filename'] == 'atom' || $_GET['filename'] == 'about' || $_GET['filename'] == 'contact' || $_GET['filename'] == 'archives') {
    $filename = $_GET['filename'];
} else {
    $page='single';
    $filename = POSTS_DIR . $_GET['filename'] . FILE_EXT;
}

/*-----------------------------------------------------------------------------------*/
/* The Home Page (All Posts)
/*-----------------------------------------------------------------------------------*/

if ($filename == 'home') {
    echo 'test';
    die;
    $posts = get_posts();
    if($posts) {
        ob_start();
        $content = '';
        $stripe = 'odd';
        foreach($posts as $post) {
            
            $post = json_decode(json_encode($post));

            $post->excerpt = Markdown($post->excerpt);

            if (file_exists($post->image)) {
                $post->image  = $blog_url.'/'.str_replace(array(FILE_EXT, '../'), '', POSTS_DIR.$entry).'.jpg',
            } else {
                $post->image = '';
            }
            
            // Grab the site intro template file.
            include_once $intro_file;
            
            if ($stripe == 'odd') {
                // Grab the odd multi-post template file.
                include $odd_posts_file;
                $stripe = 'even';
            } elseif($stripe == 'even') {
                // Grab the even multi-post template file.
                include $even_posts_file;
                $stripe = 'odd';
            }
        }

        echo $content;
        $content = ob_get_contents();

        ob_end_clean();

    } else {
        ob_start();

        // The site title
        $post->title = $error_title;
        
        include $not_found_file;
        $content = ob_get_contents();
        ob_end_clean();
    }
    
    // Get the index template file.
    include_once $index_file;

    // Grab the footer template file.
    include $footer_file;
}


/*-----------------------------------------------------------------------------------*/
/* About File
/*-----------------------------------------------------------------------------------*/

else if ($filename == 'about') {
    ob_start();
    $content = '';

    // The page title
    $page_title = $about_title;
    // the page tag
    $page_tag = $about_tag;
    // Grab the site intro template file.
    include_once $intro_file;

    $post = Markdown(file_get_contents($about_post));
            
    include $about_file;

    echo $content;
    $content = ob_get_contents();

    ob_end_clean();

    // Get the index template file.
    include_once $index_file;

    // Grab the footer template file.
    include $footer_file;
}

/*-----------------------------------------------------------------------------------*/
/* Contact File
/*-----------------------------------------------------------------------------------*/

else if ($filename == 'contact') {
    ob_start();
    $content = '';

    // The page title
    $page_title = $contact_title;
    // the page tag
    $page_tag = $contact_tag;
    // Grab the site intro template file.
    include_once $intro_file;
        
    // Grab the milti-post template file.
    include $contact_file;

    echo $content;
    $content = ob_get_contents();

    ob_end_clean();

    // Get the index template file.
    include_once $index_file;

    // Grab the footer template file.
    include $footer_file;
}

/*-----------------------------------------------------------------------------------*/
/* Archive File
/*-----------------------------------------------------------------------------------*/

else if ($filename == 'archives') {
    ob_start();
    $content = '';

    // The page title
    $page_title = $archives_title;
    // the page tag
    $page_tag = $archives_tag;
    // Grab the site intro template file.
    include_once $intro_file;
    // Grab the mwrapper start.
    include_once $archive_start;

    $posts = get_all_posts();
    if($posts) {
        $year = '';
        foreach($posts as $post) {
            $post = json_decode(json_encode($post));

            // Grab the milti-post template file.
            include $archive_file;
            
            $year = $post['year'];
        }
    }
    
    // Grab the wrapper end.
    include_once $archive_end;

    echo $content;
    $content = ob_get_contents();

    ob_end_clean();

    // Get the index template file.
    include_once $index_file;

    // Grab the footer template file.
    include $footer_file;
}

/*-----------------------------------------------------------------------------------*/
/* RSS Feed
/*-----------------------------------------------------------------------------------*/

else if ($filename == 'rss' || $filename == 'atom') {
    ($filename=='rss') ? $feed = new FeedWriter(RSS2) : $feed = new FeedWriter(ATOM);

    $feed->setTitle($blog_title);
    $feed->setLink($blog_url);

    if($filename=='rss') {
        $feed->setDescription($meta_description);
        $feed->setChannelElement('language', $language);
        $feed->setChannelElement('pubDate', date(DATE_RSS, time()));
    } else {
        $feed->setChannelElement('author', $blog_title.' - ' . $blog_email);
        $feed->setChannelElement('updated', date(DATE_RSS, time()));
    }

    $posts = get_posts();
    if($posts) {
        $c=0;
        foreach($posts as $post) {
            $post = json_decode(json_encode($post));
            if($c<$feed_max_items) {
                $item = $feed->createNewItem();
                
                // Quick & dirty hack to remove HTML 
                $item->setTitle(substr($post->title, 4, -6));
                $item->setLink(rtrim($blog_url, '/').'/'.str_replace(FILE_EXT, '', $post->filename));
                $item->setDate($post->date);

                $item->setDescription($post->content);
                if($filename=='rss') {
                    $item->addElement('author', $blog_title.' - ' . $blog_email);
                    $item->addElement('guid', rtrim($blog_url, '/').'/'.str_replace(FILE_EXT, '', $post->filename));
                }
                $feed->addItem($item);
                $c++;
            }
        }
    }
    $feed->genarateFeed();

    echo $content;
    $content = ob_get_contents();

    ob_end_clean();

    // Get the index template file.
    include_once $index_file;

    // Grab the footer template file.
    include $footer_file;
}

/*-----------------------------------------------------------------------------------*/
/* Single Post Pages
/*-----------------------------------------------------------------------------------*/

else if($page=='single') {
    ob_start();
    
    // // The cached file.
    // $cachefile = str_replace(array(FILE_EXT), '', $filename).'.html';
    
    // If there's no file for the selected permalink, grab the 404 page template.
    if (!file_exists($filename)) {
    
        // The site title
        $post->title = $error_title;
        
        include $not_found_file;
    
    // // If there is a cached file for the selected permalink, display the cached post.  
    // } else if (file_exists($cachefile)) {
    
    //     // The site title
    //     $page_title = str_replace('# ', '', $fcontents[0]);
        
    //     // Get the cached post.
    //     include $cachefile;
    
    // If there is a file for the selected permalink, display and cache the post.
    } else {
    
        // Get the index template file.
    	include_once $intro_file;

        // Get the post template file.
        include $post_start;

        $post = json_decode(json_encode($post));
        
        // Get the post template file.
        include $post_file;

        // Get the post template file.
        include $post_end;
        
        // // Cache the post on if caching is turned on.
        // if ($post_cache != 'off')
        // {
        //     $fp = fopen($cachefile, 'w'); 
        //     fwrite($fp, ob_get_contents()); 
        //     fclose($fp);
        // }
        
    }

    $content = ob_get_contents();
    ob_end_clean();

    // Get the index template file.
    include_once $index_file;

    // Get the index template file.
    include_once $footer_file;
}

/*-----------------------------------------------------------------------------------*/
/* Run Setup if No Config
/*-----------------------------------------------------------------------------------*/

} else { 
    
    include('./settings.php'); 

}

/*-----------------------------------------------------------------------------------*/
/* Get All Posts Function (Used For the Home Page Above)
/*-----------------------------------------------------------------------------------*/

function get_posts() {    
    if($handle = opendir(POSTS_DIR)) {
        while (false !== ($entry = readdir($handle))) {
            if(substr(strrchr($entry,'.'),1)==ltrim(FILE_EXT, '.')) {
                
                // The post file.
                $fcontents = explode(file_get_contents(POSTS_DIR.$entry), "---");

                $post_time = filectime(POSTS_DIR.$entry);

                // The Post variables
                $posts[$post_time] = {
                    json_decode($fcontents[0], true),
                    ["content"]     => Markdown($fcontents[1]),
                    ["filename"]    => $entry,
                    ["link"]        => str_replace(FILE_EXT, '', $entry),
                    ["image"]       => str_replace(FILE_EXT, '', POSTS_DIR.$entry).'.jpg',
                    ['date']        => date_format($post_time, $date_format),
                    ['day']         => date_format($post_time, $day_format),
                    ['month']       => date_format($post_time, $month_format),
                    ['year']        => date_format($post_time, $year_format),
                }
            }
        }
        array_multisort(array_keys($posts), SORT_DESC, $posts);
        return $posts;
        
    } else {
        return false;
    }
}

/*-----------------------------------------------------------------------------------*/
/* Get Single Posts Function (Used For the Single Page Above)
/*-----------------------------------------------------------------------------------*/

function get_post($filename) {    
    $fcontents = file($filename)
    $post_time = filectime(POSTS_DIR.$filename);

    // The Post variables
    $post = {
        json_decode($fcontents[0], true),
        ["content"]     => Markdown($fcontents[1]),
        ['date']        => date_format($post_time, $date_format),
        ['day']         => date_format($post_time, $day_format),
        ['month']       => date_format($post_time, $month_format),
        ['year']        => date_format($post_time, $year_format),
    }

    return $post;
}

