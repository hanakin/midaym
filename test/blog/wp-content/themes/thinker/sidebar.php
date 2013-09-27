<div id="sidebar">
    <img src="<?php bloginfo('template_directory'); ?>/images/ribbon_navigation.png" class="ribbon" alt="Featured Project"/>
    <div class="block_inside">
    
        <ul>
            <?php 	
            
                if ($post->post_parent != 0) {
                    $parent = $post->post_parent;
                } else {
                    $parent = $post->ID;
                }
                $parent_title = get_the_title($parent);
            	$parent_link = get_permalink($parent);
            ?>
            
            
            <li id="subpages" class="widget">
                <h3> 
                    <?php echo ('<a href="'.$parent_link.'">' . $parent_title . '</a>');  ?>
                </h3>
                <ul>
                    <?php wp_list_pages('title_li=&child_of='.$parent); ?>
                </ul>
            </li>
            
            
            <li id="search" class="widget"><h3>Search</h3>
                <?php include(TEMPLATEPATH.'/searchform.php'); ?>
            </li>

            
        </ul>                           
    
    </div>
 </div>