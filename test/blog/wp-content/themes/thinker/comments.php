<?php
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die ('Please do not load this page directly. Thanks!');
if ( post_password_required() ) {
	echo 'This post is password protected. Enter the password to view comments.';
	return;
}
?>

<?php if ( have_comments() ) : ?>
    <h3 id="comments"><?php comments_number('No Comments', 'One Comment', '% Comments' );?></h3>
     
    <ul class="commentlist">
		<?php wp_list_comments('type=comment&avatar_size=40'); ?>
	</ul>
	
    <h3 id="trackbacks">Trackbacks and Pingbacks</h3>

	<ul class="commentlist">
		<?php wp_list_comments('type=pings'); ?>
	</ul>

     
    <div class="navigation">
        <div class="alignleft"><?php previous_comments_link() ?></div>
        <div class="alignright"><?php next_comments_link() ?></div>
    </div>
    
<?php else : // this is displayed if there are no comments so far ?>

	<?php if ($post->comment_status == 'open') : ?>
        <p>There are no comments yet, add one below.</p>
    <? else : ?>
        <p>Comments are closed.</p>
    <?php endif; ?>

<? endif; ?>



<?php if ('open' == $post->comment_status) : ?>

     <div id="respond">   
        <div class="separator"></div>
    
        <h2><?php comment_form_title( 'Leave a Comment', 'Leave a Reply to %s' ); ?></h2>
        <br />
        <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
        <p>You must be <a href="<?php bloginfo('url'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
    
        <?php else : ?>
        <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
            
            <?php comment_id_fields(); ?>
            
            <?php if ( $user_ID ) : ?>
    
                <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>.
                <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout</a></p>
            <?php else : ?>
    
                <p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" class="input" />
                <label for="author"><small>Name <?php if ($req) echo "(required)"; ?></small></label></p>
    
                <p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="50" class="input" />
                <label for="email"><small>Mail (will not be published) <?php if ($req) echo "(required)"; ?></small></label></p>
    
                <p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="50"  class="input"/>
                <label for="url"><small>Website</small></label></p>
            <?php endif; ?>
            
            <p><textarea name="comment" id="data" cols="60" rows="7" tabindex="4"></textarea></p>
    
            <p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
        
            </p>
    
            <?php do_action('comment_form', $post->ID); ?>
    
        </form>
        
        <div id="cancel-comment-reply">
			<small><?php cancel_comment_reply_link() ?></small>
    	</div>

	</div>

<?php endif; ?>
<?php endif; ?>