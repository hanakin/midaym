<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>


<h2><a href="<?php echo (isset($this->_rootref['U_VIEW_FORUM'])) ? $this->_rootref['U_VIEW_FORUM'] : ''; ?>"><?php echo (isset($this->_rootref['FORUM_NAME'])) ? $this->_rootref['FORUM_NAME'] : ''; ?></a></h2>

<?php if ($this->_rootref['FORUM_DESC'] || $this->_rootref['MODERATORS'] || $this->_rootref['U_MCP']) {  ?>

<div>
	<!-- NOTE: remove the style="display: none" when you want to have the forum description on the forum body --><?php if ($this->_rootref['FORUM_DESC']) {  ?><div style="display: none !important;"><?php echo (isset($this->_rootref['FORUM_DESC'])) ? $this->_rootref['FORUM_DESC'] : ''; ?><br /></div><?php } if ($this->_rootref['MODERATORS']) {  ?><p><strong><?php if ($this->_rootref['S_SINGLE_MODERATOR']) {  echo ((isset($this->_rootref['L_MODERATOR'])) ? $this->_rootref['L_MODERATOR'] : ((isset($user->lang['MODERATOR'])) ? $user->lang['MODERATOR'] : '{ MODERATOR }')); } else { echo ((isset($this->_rootref['L_MODERATORS'])) ? $this->_rootref['L_MODERATORS'] : ((isset($user->lang['MODERATORS'])) ? $user->lang['MODERATORS'] : '{ MODERATORS }')); } ?>:</strong> <?php echo (isset($this->_rootref['MODERATORS'])) ? $this->_rootref['MODERATORS'] : ''; ?></p><?php } ?>

</div>
<?php } if ($this->_rootref['S_FORUM_RULES']) {  ?>

	<div class="rules">
		<div class="inner">

		<?php if ($this->_rootref['U_FORUM_RULES']) {  ?>

			<a href="<?php echo (isset($this->_rootref['U_FORUM_RULES'])) ? $this->_rootref['U_FORUM_RULES'] : ''; ?>"><?php echo ((isset($this->_rootref['L_FORUM_RULES'])) ? $this->_rootref['L_FORUM_RULES'] : ((isset($user->lang['FORUM_RULES'])) ? $user->lang['FORUM_RULES'] : '{ FORUM_RULES }')); ?></a>
		<?php } else { ?>

			<strong><?php echo ((isset($this->_rootref['L_FORUM_RULES'])) ? $this->_rootref['L_FORUM_RULES'] : ((isset($user->lang['FORUM_RULES'])) ? $user->lang['FORUM_RULES'] : '{ FORUM_RULES }')); ?></strong><br />
			<?php echo (isset($this->_rootref['FORUM_RULES'])) ? $this->_rootref['FORUM_RULES'] : ''; ?>

		<?php } ?>


		</div>
	</div>
<?php } if ($this->_rootref['S_HAS_SUBFORUM']) {  if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['U_MARK_FORUMS']) {  ?>

<ul class="linklist">
	<li class="rightside"><a href="<?php echo (isset($this->_rootref['U_MARK_FORUMS'])) ? $this->_rootref['U_MARK_FORUMS'] : ''; ?>"><?php echo ((isset($this->_rootref['L_MARK_SUBFORUMS_READ'])) ? $this->_rootref['L_MARK_SUBFORUMS_READ'] : ((isset($user->lang['MARK_SUBFORUMS_READ'])) ? $user->lang['MARK_SUBFORUMS_READ'] : '{ MARK_SUBFORUMS_READ }')); ?></a></li>
</ul>
<?php } $this->_tpl_include('forumlist_body.html'); } if ($this->_rootref['S_DISPLAY_POST_INFO'] || $this->_rootref['PAGINATION'] || $this->_rootref['TOTAL_POSTS'] || $this->_rootref['TOTAL_TOPICS']) {  ?>

	<div class="topic-actions" <?php if ($this->_rootref['S_HAS_SUBFORUM']) {  ?>style="margin-top: 2em;"<?php } ?>>

	<div class="row-fluid">
	
	<?php if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['S_DISPLAY_POST_INFO']) {  ?>

	<div class="span4">
	<?php if ($this->_rootref['S_IS_LOCKED']) {  ?>

	
	<a class="btn btn-danger" href="<?php echo (isset($this->_rootref['U_POST_NEW_TOPIC'])) ? $this->_rootref['U_POST_NEW_TOPIC'] : ''; ?>"><span></span><?php echo ((isset($this->_rootref['L_FORUM_LOCKED'])) ? $this->_rootref['L_FORUM_LOCKED'] : ((isset($user->lang['FORUM_LOCKED'])) ? $user->lang['FORUM_LOCKED'] : '{ FORUM_LOCKED }')); ?></a>
	<?php } else { ?>

	<a class="btn btn-primary" href="<?php echo (isset($this->_rootref['U_POST_NEW_TOPIC'])) ? $this->_rootref['U_POST_NEW_TOPIC'] : ''; ?>"><span></span><i class="icon-file icon-white"></i> <?php echo ((isset($this->_rootref['L_POST_TOPIC'])) ? $this->_rootref['L_POST_TOPIC'] : ((isset($user->lang['POST_TOPIC'])) ? $user->lang['POST_TOPIC'] : '{ POST_TOPIC }')); ?></a>
	<?php } ?>

	</div>
	<?php } if ($this->_rootref['PAGINATION'] || $this->_rootref['TOTAL_POSTS'] || $this->_rootref['TOTAL_TOPICS']) {  ?>

		<div class="p-pagination span4">
			<center><?php if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['U_MARK_TOPICS']) {  ?><a class="btn btn-mini" href="<?php echo (isset($this->_rootref['U_MARK_TOPICS'])) ? $this->_rootref['U_MARK_TOPICS'] : ''; ?>" accesskey="m"><i class="icon-check"></i> <?php echo ((isset($this->_rootref['L_MARK_TOPICS_READ'])) ? $this->_rootref['L_MARK_TOPICS_READ'] : ((isset($user->lang['MARK_TOPICS_READ'])) ? $user->lang['MARK_TOPICS_READ'] : '{ MARK_TOPICS_READ }')); ?></a> &bull; <?php } if ($this->_rootref['TOTAL_TOPICS']) {  ?><span class="label"><?php echo (isset($this->_rootref['TOTAL_TOPICS'])) ? $this->_rootref['TOTAL_TOPICS'] : ''; ?></span><?php } if ($this->_rootref['PAGE_NUMBER']) {  if ($this->_rootref['PAGINATION']) {  ?> <a href="#" onclick="jumpto(); return false;" title="<?php echo ((isset($this->_rootref['L_JUMP_TO_PAGE'])) ? $this->_rootref['L_JUMP_TO_PAGE'] : ((isset($user->lang['JUMP_TO_PAGE'])) ? $user->lang['JUMP_TO_PAGE'] : '{ JUMP_TO_PAGE }')); ?>"> &bull; <span class="label"><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?></span></a> &bull; <span><?php echo (isset($this->_rootref['PAGINATION'])) ? $this->_rootref['PAGINATION'] : ''; ?></span><?php } else { ?> &bull; <span class="label"><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?></span><?php } } ?>

			</center>
		</div>
	<?php } if ($this->_rootref['S_DISPLAY_SEARCHBOX']) {  ?>

	<div class="span4">	
		<form action="<?php echo (isset($this->_rootref['S_SEARCHBOX_ACTION'])) ? $this->_rootref['S_SEARCHBOX_ACTION'] : ''; ?>" method="get" id="forum-search" class="form-search pull-right" style="margin:0;">
				
				<fieldset>
				
					<input class="input-medium search" type="text" name="keywords" id="search_keywords" size="20" value="<?php echo ((isset($this->_rootref['L_SEARCH_FORUM'])) ? $this->_rootref['L_SEARCH_FORUM'] : ((isset($user->lang['SEARCH_FORUM'])) ? $user->lang['SEARCH_FORUM'] : '{ SEARCH_FORUM }')); ?>" onclick="if (this.value == '<?php echo ((isset($this->_rootref['LA_SEARCH_FORUM'])) ? $this->_rootref['LA_SEARCH_FORUM'] : ((isset($this->_rootref['L_SEARCH_FORUM'])) ? addslashes($this->_rootref['L_SEARCH_FORUM']) : ((isset($user->lang['SEARCH_FORUM'])) ? addslashes($user->lang['SEARCH_FORUM']) : '{ SEARCH_FORUM }'))); ?>') this.value = '';" onblur="if (this.value == '') this.value = '<?php echo ((isset($this->_rootref['LA_SEARCH_FORUM'])) ? $this->_rootref['LA_SEARCH_FORUM'] : ((isset($this->_rootref['L_SEARCH_FORUM'])) ? addslashes($this->_rootref['L_SEARCH_FORUM']) : ((isset($user->lang['SEARCH_FORUM'])) ? addslashes($user->lang['SEARCH_FORUM']) : '{ SEARCH_FORUM }'))); ?>';" />
				<button type="submit" class="btn"><?php echo ((isset($this->_rootref['L_SEARCH'])) ? $this->_rootref['L_SEARCH'] : ((isset($user->lang['SEARCH'])) ? $user->lang['SEARCH'] : '{ SEARCH }')); ?></button>
				<?php echo (isset($this->_rootref['S_SEARCH_LOCAL_HIDDEN_FIELDS'])) ? $this->_rootref['S_SEARCH_LOCAL_HIDDEN_FIELDS'] : ''; ?>


				</fieldset>
				</form>
	</div>
	<?php } ?>


	</div>

</div>
<?php } if ($this->_rootref['S_NO_READ_ACCESS']) {  ?>


	<div class="row-fluid">
		<div class="well">
		<strong><?php echo ((isset($this->_rootref['L_NO_READ_ACCESS'])) ? $this->_rootref['L_NO_READ_ACCESS'] : ((isset($user->lang['NO_READ_ACCESS'])) ? $user->lang['NO_READ_ACCESS'] : '{ NO_READ_ACCESS }')); ?></strong>
		</div>
	</div>

	<?php if (! $this->_rootref['S_USER_LOGGED_IN'] && ! $this->_rootref['S_IS_BOT']) {  ?>


		<form action="<?php echo (isset($this->_rootref['S_LOGIN_ACTION'])) ? $this->_rootref['S_LOGIN_ACTION'] : ''; ?>" method="post">

		<div class="row-fluid">
			<div class="well">
					<h3 class="box-heading"><a href="<?php echo (isset($this->_rootref['U_LOGIN_LOGOUT'])) ? $this->_rootref['U_LOGIN_LOGOUT'] : ''; ?>"><?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?></a><?php if ($this->_rootref['S_REGISTER_ENABLED']) {  ?>&nbsp; &bull; &nbsp;<a href="<?php echo (isset($this->_rootref['U_REGISTER'])) ? $this->_rootref['U_REGISTER'] : ''; ?>"><?php echo ((isset($this->_rootref['L_REGISTER'])) ? $this->_rootref['L_REGISTER'] : ((isset($user->lang['REGISTER'])) ? $user->lang['REGISTER'] : '{ REGISTER }')); ?></a><?php } ?></h3>
			<div class="content">
				

				<fieldset class="fields1">
				<dl>
					<dt><label for="username"><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>:</label></dt>
					<dd><input type="text" tabindex="1" name="username" id="username" size="25" value="<?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>" class="inputbox autowidth" /></dd>
				</dl>
				<dl>
					<dt><label for="password"><?php echo ((isset($this->_rootref['L_PASSWORD'])) ? $this->_rootref['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ PASSWORD }')); ?>:</label></dt>
					<dd><input type="password" tabindex="2" id="password" name="password" size="25" class="inputbox autowidth" /></dd>
					<?php if ($this->_rootref['S_AUTOLOGIN_ENABLED']) {  ?><dd><label for="autologin"><input type="checkbox" name="autologin" id="autologin" tabindex="3" /> <?php echo ((isset($this->_rootref['L_LOG_ME_IN'])) ? $this->_rootref['L_LOG_ME_IN'] : ((isset($user->lang['LOG_ME_IN'])) ? $user->lang['LOG_ME_IN'] : '{ LOG_ME_IN }')); ?></label></dd><?php } ?>

					<dd><label for="viewonline"><input type="checkbox" name="viewonline" id="viewonline" tabindex="4" /> <?php echo ((isset($this->_rootref['L_HIDE_ME'])) ? $this->_rootref['L_HIDE_ME'] : ((isset($user->lang['HIDE_ME'])) ? $user->lang['HIDE_ME'] : '{ HIDE_ME }')); ?></label></dd>
				</dl>
				<dl>
					<dt>&nbsp;</dt>
					<dd><input type="submit" name="login" tabindex="5" value="<?php echo ((isset($this->_rootref['L_LOGIN'])) ? $this->_rootref['L_LOGIN'] : ((isset($user->lang['LOGIN'])) ? $user->lang['LOGIN'] : '{ LOGIN }')); ?>" class="btn" /></dd>
				</dl>
				<?php echo (isset($this->_rootref['S_LOGIN_REDIRECT'])) ? $this->_rootref['S_LOGIN_REDIRECT'] : ''; ?>

				</fieldset>
			</div>

			</div>
		</div>

		</form>

	<?php } } $_topicrow_count = (isset($this->_tpldata['topicrow'])) ? sizeof($this->_tpldata['topicrow']) : 0;if ($_topicrow_count) {for ($_topicrow_i = 0; $_topicrow_i < $_topicrow_count; ++$_topicrow_i){$_topicrow_val = &$this->_tpldata['topicrow'][$_topicrow_i]; if (! $_topicrow_val['S_TOPIC_TYPE_SWITCH'] && ! $_topicrow_val['S_FIRST_ROW']) {  ?>

		</ul>
		</div>
	</div>
	<?php } if ($_topicrow_val['S_FIRST_ROW'] || ! $_topicrow_val['S_TOPIC_TYPE_SWITCH']) {  ?>

	
	
	
	
	
	
		<div class="forumbg<?php if ($_topicrow_val['S_TOPIC_TYPE_SWITCH'] && ( $_topicrow_val['S_POST_ANNOUNCE'] || $_topicrow_val['S_POST_GLOBAL'] )) {  ?> announcement<?php } ?>">
		
		<table class="table table-striped table-bordered" style="margin-bottom: 15px;">
		<thead class="topiclist">
			<tr class="header">
				
					<th width="50%"><?php if ($this->_rootref['S_DISPLAY_ACTIVE']) {  echo ((isset($this->_rootref['L_ACTIVE_TOPICS'])) ? $this->_rootref['L_ACTIVE_TOPICS'] : ((isset($user->lang['ACTIVE_TOPICS'])) ? $user->lang['ACTIVE_TOPICS'] : '{ ACTIVE_TOPICS }')); } else if ($_topicrow_val['S_TOPIC_TYPE_SWITCH'] && ( $_topicrow_val['S_POST_ANNOUNCE'] || $_topicrow_val['S_POST_GLOBAL'] )) {  echo ((isset($this->_rootref['L_ANNOUNCEMENTS'])) ? $this->_rootref['L_ANNOUNCEMENTS'] : ((isset($user->lang['ANNOUNCEMENTS'])) ? $user->lang['ANNOUNCEMENTS'] : '{ ANNOUNCEMENTS }')); } else { echo ((isset($this->_rootref['L_TOPICS'])) ? $this->_rootref['L_TOPICS'] : ((isset($user->lang['TOPICS'])) ? $user->lang['TOPICS'] : '{ TOPICS }')); } ?></th>
					<th class="posts"><?php echo ((isset($this->_rootref['L_REPLIES'])) ? $this->_rootref['L_REPLIES'] : ((isset($user->lang['REPLIES'])) ? $user->lang['REPLIES'] : '{ REPLIES }')); ?></th>
					<th class="views"><?php echo ((isset($this->_rootref['L_VIEWS'])) ? $this->_rootref['L_VIEWS'] : ((isset($user->lang['VIEWS'])) ? $user->lang['VIEWS'] : '{ VIEWS }')); ?></th>
					<th class="lastpost"><span><?php echo ((isset($this->_rootref['L_LAST_POST'])) ? $this->_rootref['L_LAST_POST'] : ((isset($user->lang['LAST_POST'])) ? $user->lang['LAST_POST'] : '{ LAST_POST }')); ?></span></th>
				
			</tr>
		</thead>
		<tbody class="topiclist topics">
	<?php } ?>


		<tr class="t-row<?php if ($_topicrow_val['S_POST_GLOBAL']) {  ?> warning-color<?php } if ($_topicrow_val['S_POST_ANNOUNCE']) {  ?> info-color<?php } if ($_topicrow_val['S_POST_STICKY']) {  ?> success-color<?php } if ($_topicrow_val['S_TOPIC_REPORTED']) {  ?> danger-color<?php } ?>">
			
				<td class="<?php if ($_topicrow_val['S_POST_GLOBAL']) {  ?> warning-color<?php } if ($_topicrow_val['S_POST_ANNOUNCE']) {  ?> info-color<?php } if ($_topicrow_val['S_POST_STICKY']) {  ?> success-color<?php } if ($_topicrow_val['S_TOPIC_REPORTED']) {  ?> danger-color<?php } ?>"width="50%" <?php if ($_topicrow_val['TOPIC_ICON_IMG'] && $this->_rootref['S_TOPIC_ICONS']) {  ?> style="background-image: url(<?php echo (isset($this->_rootref['T_ICONS_PATH'])) ? $this->_rootref['T_ICONS_PATH'] : ''; echo $_topicrow_val['TOPIC_ICON_IMG']; ?>); background-repeat: no-repeat;"<?php } ?> title="<?php echo $_topicrow_val['TOPIC_FOLDER_IMG_ALT']; ?>"><?php if ($_topicrow_val['S_UNREAD_TOPIC']) {  ?><a href="<?php echo $_topicrow_val['U_NEWEST_POST']; ?>"><?php echo (isset($this->_rootref['NEWEST_POST_IMG'])) ? $this->_rootref['NEWEST_POST_IMG'] : ''; ?></a> <?php } if ($_topicrow_val['S_POST_GLOBAL']) {  ?><span class="label label-warning pull-right hidden-phone">GLOBAL</span> <?php } if ($_topicrow_val['S_POST_ANNOUNCE']) {  ?><span class="label label-info pull-right hidden-phone">ANNOUNCEMENT</span> <?php } if ($_topicrow_val['S_POST_STICKY']) {  ?><span class="label label-success pull-right hidden-phone">STICKY</span> <?php } ?><i class="pcon <?php echo $_topicrow_val['TOPIC_IMG_STYLE']; ?>"></i><a href="<?php echo $_topicrow_val['U_VIEW_TOPIC']; ?>" class="topictitle"> <?php echo $_topicrow_val['TOPIC_TITLE']; ?></a>
					<?php if ($_topicrow_val['S_TOPIC_UNAPPROVED'] || $_topicrow_val['S_POSTS_UNAPPROVED']) {  ?><a href="<?php echo $_topicrow_val['U_MCP_QUEUE']; ?>"><?php echo $_topicrow_val['UNAPPROVED_IMG']; ?></a> <?php } if ($_topicrow_val['S_TOPIC_REPORTED']) {  ?><a href="<?php echo $_topicrow_val['U_MCP_REPORT']; ?>"><span class="label label-important pull-right"><i class="icon-exclamation-sign icon-white"></i></span></a><?php } ?><br />
					
					<?php if ($_topicrow_val['ATTACH_ICON_IMG']) {  echo $_topicrow_val['ATTACH_ICON_IMG']; ?> <?php } echo ((isset($this->_rootref['L_POST_BY_AUTHOR'])) ? $this->_rootref['L_POST_BY_AUTHOR'] : ((isset($user->lang['POST_BY_AUTHOR'])) ? $user->lang['POST_BY_AUTHOR'] : '{ POST_BY_AUTHOR }')); ?> <?php echo $_topicrow_val['TOPIC_AUTHOR_FULL']; ?> &raquo; <?php echo $_topicrow_val['FIRST_POST_TIME']; ?>

					<?php if ($_topicrow_val['S_POST_GLOBAL'] && $this->_rootref['FORUM_ID'] != $_topicrow_val['FORUM_ID']) {  ?> &raquo; <?php echo ((isset($this->_rootref['L_IN'])) ? $this->_rootref['L_IN'] : ((isset($user->lang['IN'])) ? $user->lang['IN'] : '{ IN }')); ?> <a href="<?php echo $_topicrow_val['U_VIEW_FORUM']; ?>"><?php echo $_topicrow_val['FORUM_NAME']; ?></a><?php } if ($_topicrow_val['PAGINATION']) {  ?><div class="p-pagination pull-right"><span><?php echo $_topicrow_val['PAGINATION']; ?></span></div><?php } ?>

				</td>
				<td class="posts<?php if ($_topicrow_val['S_POST_GLOBAL']) {  ?> warning-color<?php } if ($_topicrow_val['S_POST_ANNOUNCE']) {  ?> info-color<?php } if ($_topicrow_val['S_POST_STICKY']) {  ?> success-color<?php } if ($_topicrow_val['S_TOPIC_REPORTED']) {  ?> danger-color<?php } ?>"><center><span class="badge"><?php echo $_topicrow_val['REPLIES']; ?></span></center></td>
				<td class="views<?php if ($_topicrow_val['S_POST_GLOBAL']) {  ?> warning-color<?php } if ($_topicrow_val['S_POST_ANNOUNCE']) {  ?> info-color<?php } if ($_topicrow_val['S_POST_STICKY']) {  ?> success-color<?php } if ($_topicrow_val['S_TOPIC_REPORTED']) {  ?> danger-color<?php } ?>"><center><span class="badge"><?php echo $_topicrow_val['VIEWS']; ?></span></center></td>
				<td class="lastpost<?php if ($_topicrow_val['S_POST_GLOBAL']) {  ?> warning-color<?php } if ($_topicrow_val['S_POST_ANNOUNCE']) {  ?> info-color<?php } if ($_topicrow_val['S_POST_STICKY']) {  ?> success-color<?php } if ($_topicrow_val['S_TOPIC_REPORTED']) {  ?> danger-color<?php } ?>"><span class="hidden-phone"><def><a href="<?php echo $_topicrow_val['U_LAST_POST']; ?>"><?php echo $_topicrow_val['LAST_POST_SUBJECT']; ?></a> </def><?php echo ((isset($this->_rootref['L_POST_BY_AUTHOR'])) ? $this->_rootref['L_POST_BY_AUTHOR'] : ((isset($user->lang['POST_BY_AUTHOR'])) ? $user->lang['POST_BY_AUTHOR'] : '{ POST_BY_AUTHOR }')); ?> </span><?php echo $_topicrow_val['LAST_POST_AUTHOR_FULL']; ?>

					<?php if (! $this->_rootref['S_IS_BOT']) {  ?><a href="<?php echo $_topicrow_val['U_LAST_POST']; ?>"><?php echo (isset($this->_rootref['LAST_POST_IMG'])) ? $this->_rootref['LAST_POST_IMG'] : ''; ?></a> <?php } ?><br /><?php echo $_topicrow_val['LAST_POST_TIME']; ?>

				</td>
			
		</tr>
		

	<?php if ($_topicrow_val['S_LAST_ROW']) {  ?>

			</tbody>
			</table>
		
	</div>
	<?php } }} else { if ($this->_rootref['S_IS_POSTABLE']) {  ?>

	<div class="panel">
		<div class="inner">
		<strong><?php echo ((isset($this->_rootref['L_NO_TOPICS'])) ? $this->_rootref['L_NO_TOPICS'] : ((isset($user->lang['NO_TOPICS'])) ? $user->lang['NO_TOPICS'] : '{ NO_TOPICS }')); ?></strong>
		</div>
	</div>
	<?php } } if ($this->_rootref['S_SELECT_SORT_DAYS'] && ! $this->_rootref['S_DISPLAY_ACTIVE']) {  ?>

	<form method="post" action="<?php echo (isset($this->_rootref['S_FORUM_ACTION'])) ? $this->_rootref['S_FORUM_ACTION'] : ''; ?>" class="well form-inline">
		<fieldset class="display-options">
			<?php if ($this->_rootref['PREVIOUS_PAGE']) {  ?><a class="btn btn-inverse" href="<?php echo (isset($this->_rootref['PREVIOUS_PAGE'])) ? $this->_rootref['PREVIOUS_PAGE'] : ''; ?>" class="left-box <?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>"><?php echo ((isset($this->_rootref['L_PREVIOUS'])) ? $this->_rootref['L_PREVIOUS'] : ((isset($user->lang['PREVIOUS'])) ? $user->lang['PREVIOUS'] : '{ PREVIOUS }')); ?></a><?php } if ($this->_rootref['NEXT_PAGE']) {  ?><a class="btn btn-inverse" href="<?php echo (isset($this->_rootref['NEXT_PAGE'])) ? $this->_rootref['NEXT_PAGE'] : ''; ?>" class="right-box <?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>"><?php echo ((isset($this->_rootref['L_NEXT'])) ? $this->_rootref['L_NEXT'] : ((isset($user->lang['NEXT'])) ? $user->lang['NEXT'] : '{ NEXT }')); ?></a><?php } if (! $this->_rootref['S_IS_BOT']) {  ?>

			<label><?php echo ((isset($this->_rootref['L_DISPLAY_TOPICS'])) ? $this->_rootref['L_DISPLAY_TOPICS'] : ((isset($user->lang['DISPLAY_TOPICS'])) ? $user->lang['DISPLAY_TOPICS'] : '{ DISPLAY_TOPICS }')); ?>: <?php echo (isset($this->_rootref['S_SELECT_SORT_DAYS'])) ? $this->_rootref['S_SELECT_SORT_DAYS'] : ''; ?></label>
			<label><?php echo ((isset($this->_rootref['L_SORT_BY'])) ? $this->_rootref['L_SORT_BY'] : ((isset($user->lang['SORT_BY'])) ? $user->lang['SORT_BY'] : '{ SORT_BY }')); ?> <?php echo (isset($this->_rootref['S_SELECT_SORT_KEY'])) ? $this->_rootref['S_SELECT_SORT_KEY'] : ''; ?></label>
			<label><?php echo (isset($this->_rootref['S_SELECT_SORT_DIR'])) ? $this->_rootref['S_SELECT_SORT_DIR'] : ''; ?> <input type="submit" name="sort" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" class="btn" /></label>
	<?php } ?>

		</fieldset>
	</form>
	
<?php } if (sizeof($this->_tpldata['topicrow']) && ! $this->_rootref['S_DISPLAY_ACTIVE']) {  ?>


	
	<div class="row-fluid">
	
	<?php if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['S_DISPLAY_POST_INFO']) {  ?>

	<div class="span4">
	<?php if ($this->_rootref['S_IS_LOCKED']) {  ?>

	
	<a class="btn btn-danger" href="<?php echo (isset($this->_rootref['U_POST_NEW_TOPIC'])) ? $this->_rootref['U_POST_NEW_TOPIC'] : ''; ?>"><span></span><?php echo ((isset($this->_rootref['L_FORUM_LOCKED'])) ? $this->_rootref['L_FORUM_LOCKED'] : ((isset($user->lang['FORUM_LOCKED'])) ? $user->lang['FORUM_LOCKED'] : '{ FORUM_LOCKED }')); ?></a>
	<?php } else { ?>

	<a class="btn btn-primary" href="<?php echo (isset($this->_rootref['U_POST_NEW_TOPIC'])) ? $this->_rootref['U_POST_NEW_TOPIC'] : ''; ?>"><span></span><i class="icon-file icon-white"></i> <?php echo ((isset($this->_rootref['L_POST_TOPIC'])) ? $this->_rootref['L_POST_TOPIC'] : ((isset($user->lang['POST_TOPIC'])) ? $user->lang['POST_TOPIC'] : '{ POST_TOPIC }')); ?></a>
	<?php } ?>

	</div>
	<?php } if ($this->_rootref['PAGINATION'] || $this->_rootref['TOTAL_POSTS'] || $this->_rootref['TOTAL_TOPICS']) {  ?>

		<div class="p-pagination span4">
			<center><?php if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['U_MARK_TOPICS']) {  ?><a class="btn btn-mini" href="<?php echo (isset($this->_rootref['U_MARK_TOPICS'])) ? $this->_rootref['U_MARK_TOPICS'] : ''; ?>" accesskey="m"><i class="icon-check"></i> <?php echo ((isset($this->_rootref['L_MARK_TOPICS_READ'])) ? $this->_rootref['L_MARK_TOPICS_READ'] : ((isset($user->lang['MARK_TOPICS_READ'])) ? $user->lang['MARK_TOPICS_READ'] : '{ MARK_TOPICS_READ }')); ?></a> &bull; <?php } if ($this->_rootref['TOTAL_TOPICS']) {  ?><span class="label"><?php echo (isset($this->_rootref['TOTAL_TOPICS'])) ? $this->_rootref['TOTAL_TOPICS'] : ''; ?></span><?php } if ($this->_rootref['PAGE_NUMBER']) {  if ($this->_rootref['PAGINATION']) {  ?> <a href="#" onclick="jumpto(); return false;" title="<?php echo ((isset($this->_rootref['L_JUMP_TO_PAGE'])) ? $this->_rootref['L_JUMP_TO_PAGE'] : ((isset($user->lang['JUMP_TO_PAGE'])) ? $user->lang['JUMP_TO_PAGE'] : '{ JUMP_TO_PAGE }')); ?>"> &bull; <span class="label label-info"><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?></span></a> &bull; <span><?php echo (isset($this->_rootref['PAGINATION'])) ? $this->_rootref['PAGINATION'] : ''; ?></span><?php } else { ?> &bull; <span class="label"><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?></span><?php } } ?>

			</center>
		</div>
	<?php } if ($this->_rootref['S_DISPLAY_SEARCHBOX']) {  ?>

	<div class="span4">	
		<form action="<?php echo (isset($this->_rootref['S_SEARCHBOX_ACTION'])) ? $this->_rootref['S_SEARCHBOX_ACTION'] : ''; ?>" method="get" id="forum-search" class="form-search pull-right" style="margin:0;">
				
				<fieldset>
				
					<input class="input-medium search" type="text" name="keywords" id="search_keywords" size="20" value="<?php echo ((isset($this->_rootref['L_SEARCH_FORUM'])) ? $this->_rootref['L_SEARCH_FORUM'] : ((isset($user->lang['SEARCH_FORUM'])) ? $user->lang['SEARCH_FORUM'] : '{ SEARCH_FORUM }')); ?>" onclick="if (this.value == '<?php echo ((isset($this->_rootref['LA_SEARCH_FORUM'])) ? $this->_rootref['LA_SEARCH_FORUM'] : ((isset($this->_rootref['L_SEARCH_FORUM'])) ? addslashes($this->_rootref['L_SEARCH_FORUM']) : ((isset($user->lang['SEARCH_FORUM'])) ? addslashes($user->lang['SEARCH_FORUM']) : '{ SEARCH_FORUM }'))); ?>') this.value = '';" onblur="if (this.value == '') this.value = '<?php echo ((isset($this->_rootref['LA_SEARCH_FORUM'])) ? $this->_rootref['LA_SEARCH_FORUM'] : ((isset($this->_rootref['L_SEARCH_FORUM'])) ? addslashes($this->_rootref['L_SEARCH_FORUM']) : ((isset($user->lang['SEARCH_FORUM'])) ? addslashes($user->lang['SEARCH_FORUM']) : '{ SEARCH_FORUM }'))); ?>';" />
				<button type="submit" class="btn"><?php echo ((isset($this->_rootref['L_SEARCH'])) ? $this->_rootref['L_SEARCH'] : ((isset($user->lang['SEARCH'])) ? $user->lang['SEARCH'] : '{ SEARCH }')); ?></button>
				<?php echo (isset($this->_rootref['S_SEARCH_LOCAL_HIDDEN_FIELDS'])) ? $this->_rootref['S_SEARCH_LOCAL_HIDDEN_FIELDS'] : ''; ?>


				</fieldset>
				</form>
	</div>
	<?php } ?>


	</div>

</div>
<?php } $this->_tpl_include('jumpbox.html'); if ($this->_rootref['S_DISPLAY_ONLINE_LIST']) {  ?>

<div class="row-fluid box">
	<h3 class="heading"><?php if ($this->_rootref['U_VIEWONLINE']) {  ?><a href="<?php echo (isset($this->_rootref['U_VIEWONLINE'])) ? $this->_rootref['U_VIEWONLINE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_WHO_IS_ONLINE'])) ? $this->_rootref['L_WHO_IS_ONLINE'] : ((isset($user->lang['WHO_IS_ONLINE'])) ? $user->lang['WHO_IS_ONLINE'] : '{ WHO_IS_ONLINE }')); ?></a><?php } else { echo ((isset($this->_rootref['L_WHO_IS_ONLINE'])) ? $this->_rootref['L_WHO_IS_ONLINE'] : ((isset($user->lang['WHO_IS_ONLINE'])) ? $user->lang['WHO_IS_ONLINE'] : '{ WHO_IS_ONLINE }')); } ?></h3>
	<p><?php echo (isset($this->_rootref['LOGGED_IN_USER_LIST'])) ? $this->_rootref['LOGGED_IN_USER_LIST'] : ''; ?></p>
</div>

<?php } if ($this->_rootref['S_DISPLAY_POST_INFO']) {  ?>

<div class="row-fluid box">
	<h3 class="heading"><?php echo ((isset($this->_rootref['L_FORUM_PERMISSIONS'])) ? $this->_rootref['L_FORUM_PERMISSIONS'] : ((isset($user->lang['FORUM_PERMISSIONS'])) ? $user->lang['FORUM_PERMISSIONS'] : '{ FORUM_PERMISSIONS }')); ?></h3>
	<p><?php $_rules_count = (isset($this->_tpldata['rules'])) ? sizeof($this->_tpldata['rules']) : 0;if ($_rules_count) {for ($_rules_i = 0; $_rules_i < $_rules_count; ++$_rules_i){$_rules_val = &$this->_tpldata['rules'][$_rules_i]; echo $_rules_val['RULE']; ?><br /><?php }} ?></p>
</div>

<?php } $this->_tpl_include('overall_footer.html'); ?>