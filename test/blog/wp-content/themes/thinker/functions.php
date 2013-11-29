<?php

// Set Theme Categories
define('NEWS', 4);
define('WEB', 3);

// Set Link Categories
define('BLOGROLL', 2);
define('INSPIRATION', 17);

// Set Them Links
define('WORK', get_bloginfo('url') . '/wp-content/uploads/work/');
define('DOWNLOAD', get_bloginfo('url') . '/wp-content/downloads/');
define('NEWSUP', get_bloginfo('url') . '/wp-content/uploads/news/');
define('UPLOADS', get_bloginfo('url') . '/wp-content/uploads/');
define('FEATUREDSITE', get_bloginfo('url') . '/wp-content/uploads/featured/');
define('ADS', get_bloginfo('url') . '/wp-content/uploads/ads/');

	add_filter('comments_template', 'legacy_comments');
	function legacy_comments($file) {
		if ( !function_exists('wp_list_comments') ) 
			$file = TEMPLATEPATH . '/old-comments.php';
		return $file;
	}
	
//new list categories function
 function mm_list_cats($sep, $exclude) {
	foreach((get_the_category()) as $category) {
		if ($category->cat_ID == $exclude) {
			//do nothing
		} else {
			if ($seperator) { echo $seperator; }
			echo '<a href="'. get_bloginfo('url') .'/' . $category->cat_name . '" title="midaym.com | Blog Categorie: '. $category->cat_name .'">'. $category->cat_name . '</a>';
			$seperator=$sep;
		}
	}
}	

//word limiter
function string_limit_words($string, $word_limit) {
	$words = explode(' ', $string);
	return implode(' ', array_slice($words, 0, $word_limit));
}

//simple pie load function
function simplepie() {
	require_once get_bloginfo('url').'wp-content/plugins/simplepie.inc';
}

//expires function
function expires($this_date,$num_days){

	    $my_time = strtotime($this_date); //converts date string to UNIX timestamp
	    $timestamp = $my_time + ($num_days * 86400); //calculates # of days passed ($num_days) * # seconds in a day (86400)
	     $return_date = date("D\, j M Y G:i:s T",$timestamp);  //puts the UNIX timestamp back into string format

	    return $return_date;//exit function and return string
}
?>