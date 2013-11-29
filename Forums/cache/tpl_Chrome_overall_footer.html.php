<?php if (!defined('IN_PHPBB')) exit; ?><!-- @start overall_footer -->
</div>
<!-- @end Container --><!-- @start Footer -->
<div id="footer" class="clearfix">
	<!-- @start Container -->
	<div class="container_24 clearfix">
		<div class="navbar grid_24">
			<div class="inner">
				<ul class="float">
					<li class="icon-home grid_11 alpha omega">
						<span class="home"><a href="<?php echo (isset($this->_rootref['U_INDEX'])) ? $this->_rootref['U_INDEX'] : ''; ?>" accesskey="h"><?php echo ((isset($this->_rootref['L_INDEX'])) ? $this->_rootref['L_INDEX'] : ((isset($user->lang['INDEX'])) ? $user->lang['INDEX'] : '{ INDEX }')); ?></a></span>
						<?php if (! $this->_rootref['S_IS_BOT']) {  if ($this->_rootref['S_WATCH_FORUM_LINK']) {  ?>

						<span <?php if ($this->_rootref['S_WATCHING_FORUM']) {  ?>class="unsubscribe"<?php } else { ?>class="subscribe"<?php } ?>><a href="<?php echo (isset($this->_rootref['S_WATCH_FORUM_LINK'])) ? $this->_rootref['S_WATCH_FORUM_LINK'] : ''; ?>" title="<?php echo (isset($this->_rootref['S_WATCH_FORUM_TITLE'])) ? $this->_rootref['S_WATCH_FORUM_TITLE'] : ''; ?>"><?php echo (isset($this->_rootref['S_WATCH_FORUM_TITLE'])) ? $this->_rootref['S_WATCH_FORUM_TITLE'] : ''; ?></a></span>
					<?php } if ($this->_rootref['U_WATCH_TOPIC']) {  ?>

					<span <?php if ($this->_rootref['S_WATCHING_TOPIC']) {  ?>class="unsubscribe"<?php } else { ?>class="subscribe"<?php } ?>><a href="<?php echo (isset($this->_rootref['U_WATCH_TOPIC'])) ? $this->_rootref['U_WATCH_TOPIC'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_WATCH_TOPIC'])) ? $this->_rootref['L_WATCH_TOPIC'] : ((isset($user->lang['WATCH_TOPIC'])) ? $user->lang['WATCH_TOPIC'] : '{ WATCH_TOPIC }')); ?>"><?php echo ((isset($this->_rootref['L_WATCH_TOPIC'])) ? $this->_rootref['L_WATCH_TOPIC'] : ((isset($user->lang['WATCH_TOPIC'])) ? $user->lang['WATCH_TOPIC'] : '{ WATCH_TOPIC }')); ?></a></span>
					<?php } if ($this->_rootref['U_BOOKMARK_TOPIC']) {  ?>

					<span class="bookmark"><a href="<?php echo (isset($this->_rootref['U_BOOKMARK_TOPIC'])) ? $this->_rootref['U_BOOKMARK_TOPIC'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_BOOKMARK_TOPIC'])) ? $this->_rootref['L_BOOKMARK_TOPIC'] : ((isset($user->lang['BOOKMARK_TOPIC'])) ? $user->lang['BOOKMARK_TOPIC'] : '{ BOOKMARK_TOPIC }')); ?>"><?php echo ((isset($this->_rootref['L_BOOKMARK_TOPIC'])) ? $this->_rootref['L_BOOKMARK_TOPIC'] : ((isset($user->lang['BOOKMARK_TOPIC'])) ? $user->lang['BOOKMARK_TOPIC'] : '{ BOOKMARK_TOPIC }')); ?></a></span>
					<?php } if ($this->_rootref['U_BUMP_TOPIC']) {  ?>

					<span class="bump"><a href="<?php echo (isset($this->_rootref['U_BUMP_TOPIC'])) ? $this->_rootref['U_BUMP_TOPIC'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_BUMP_TOPIC'])) ? $this->_rootref['L_BUMP_TOPIC'] : ((isset($user->lang['BUMP_TOPIC'])) ? $user->lang['BUMP_TOPIC'] : '{ BUMP_TOPIC }')); ?>">Bump</a></span>
					<?php } } ?>

					<li class="rightside">
						<?php if ($this->_rootref['U_TEAM']) {  ?>

						<a href="<?php echo (isset($this->_rootref['U_TEAM'])) ? $this->_rootref['U_TEAM'] : ''; ?>"><?php echo ((isset($this->_rootref['L_THE_TEAM'])) ? $this->_rootref['L_THE_TEAM'] : ((isset($user->lang['THE_TEAM'])) ? $user->lang['THE_TEAM'] : '{ THE_TEAM }')); ?></a> &bull;
						<?php } if (! $this->_rootref['S_IS_BOT']) {  ?>

						<a href="<?php echo (isset($this->_rootref['U_DELETE_COOKIES'])) ? $this->_rootref['U_DELETE_COOKIES'] : ''; ?>"><?php echo ((isset($this->_rootref['L_DELETE_COOKIES'])) ? $this->_rootref['L_DELETE_COOKIES'] : ((isset($user->lang['DELETE_COOKIES'])) ? $user->lang['DELETE_COOKIES'] : '{ DELETE_COOKIES }')); ?></a> &bull;
						<?php } ?>

						<?php echo (isset($this->_rootref['S_TIMEZONE'])) ? $this->_rootref['S_TIMEZONE'] : ''; ?></li>
				</ul>
			</div>
		</div>
		<div class="copyright grid_24"> Powered by <a href="http://www.phpbb.com/">phpBB</a> &copy; 2000, 2002, 2005, 2007 phpBB Group <br />
			<span>Chrome by <a class="username-coloured" style="color: rgb(204, 0, 0);" href="./memberlist.php?mode=viewprofile&amp;u=55">Hanakin</a> &copy; 2010 <a href="http://www.midaym.com/">30studio</a></span>
			<?php if ($this->_rootref['U_STK']) {  ?><br /><strong><a href="<?php echo (isset($this->_rootref['U_STK'])) ? $this->_rootref['U_STK'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_STK'])) ? $this->_rootref['L_STK'] : ((isset($user->lang['STK'])) ? $user->lang['STK'] : '{ STK }')); ?>"><?php echo ((isset($this->_rootref['L_STK'])) ? $this->_rootref['L_STK'] : ((isset($user->lang['STK'])) ? $user->lang['STK'] : '{ STK }')); ?></a></strong><?php } ?>

		</div>
		<div> <a id="bottom" name="bottom" accesskey="z"></a>
			<?php if (! $this->_rootref['S_IS_BOT']) {  ?>

			<?php echo (isset($this->_rootref['RUN_CRON_TASK'])) ? $this->_rootref['RUN_CRON_TASK'] : ''; ?>

			<?php } ?>

		</div>
	</div>
	<!-- @end Container -->
</div>
<!-- @end Footer -->
</div>
<!-- @start Scripts --><!-- @end Scripts -->
</body>
</html>