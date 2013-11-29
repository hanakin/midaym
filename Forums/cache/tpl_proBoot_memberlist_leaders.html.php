<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>


<h2 class="solo"><?php echo (isset($this->_rootref['PAGE_TITLE'])) ? $this->_rootref['PAGE_TITLE'] : ''; ?></h2>

<form method="post" action="<?php echo (isset($this->_rootref['S_MODE_ACTION'])) ? $this->_rootref['S_MODE_ACTION'] : ''; ?>">

<?php $_group_count = (isset($this->_tpldata['group'])) ? sizeof($this->_tpldata['group']) : 0;if ($_group_count) {for ($_group_i = 0; $_group_i < $_group_count; ++$_group_i){$_group_val = &$this->_tpldata['group'][$_group_i]; ?>



	<table class="table table-bordered table-striped">
	<thead>
	<tr>
		<th class="name"><span class="rank-img"><?php echo ((isset($this->_rootref['L_RANK'])) ? $this->_rootref['L_RANK'] : ((isset($user->lang['RANK'])) ? $user->lang['RANK'] : '{ RANK }')); ?>&nbsp;</span><?php if ($_group_val['U_GROUP']) {  ?><a href="<?php echo $_group_val['U_GROUP']; ?>"><?php echo $_group_val['GROUP_NAME']; ?></a><?php } else { echo $_group_val['GROUP_NAME']; } ?></th>
		<th class="info"><?php echo ((isset($this->_rootref['L_PRIMARY_GROUP'])) ? $this->_rootref['L_PRIMARY_GROUP'] : ((isset($user->lang['PRIMARY_GROUP'])) ? $user->lang['PRIMARY_GROUP'] : '{ PRIMARY_GROUP }')); ?></th>
		<?php if ($this->_rootref['S_DISPLAY_MODERATOR_FORUMS']) {  ?><th class="info"><?php echo ((isset($this->_rootref['L_MODERATOR'])) ? $this->_rootref['L_MODERATOR'] : ((isset($user->lang['MODERATOR'])) ? $user->lang['MODERATOR'] : '{ MODERATOR }')); ?></th><?php } ?>

	</tr>
	</thead>
	<tbody>
<?php $_user_count = (isset($_group_val['user'])) ? sizeof($_group_val['user']) : 0;if ($_user_count) {for ($_user_i = 0; $_user_i < $_user_count; ++$_user_i){$_user_val = &$_group_val['user'][$_user_i]; ?>

	<tr class="<?php if (!($_user_val['S_ROW_COUNT'] & 1)  ) {  ?>bg1<?php } else { ?>bg2<?php } ?>">
		<td><?php if ($_user_val['RANK_IMG']) {  ?><span class="rank-img"><?php echo $_user_val['RANK_IMG']; ?></span><?php } else { ?><span class="rank-img"><?php echo $_user_val['RANK_TITLE']; ?></span><?php } echo $_user_val['USERNAME_FULL']; ?></td>
		<td class="info"><?php if ($_user_val['U_GROUP']) {  ?>

			<a<?php if ($_user_val['GROUP_COLOR']) {  ?> style="font-weight: bold; color: #<?php echo $_user_val['GROUP_COLOR']; ?>"<?php } ?> href="<?php echo $_user_val['U_GROUP']; ?>"><?php echo $_user_val['GROUP_NAME']; ?></a>
			<?php } else { ?>

				<?php echo $_user_val['GROUP_NAME']; ?>

			<?php } ?></td>
		<?php if ($this->_rootref['S_DISPLAY_MODERATOR_FORUMS']) {  ?>

			<td class="info"><?php if ($_user_val['FORUM_OPTIONS']) {  ?><select style="width: 100%;"><?php echo $_user_val['FORUMS']; ?></select><?php } else if ($_user_val['FORUMS']) {  echo $_user_val['FORUMS']; } else { ?>-<?php } ?></td>
		<?php } ?>

	</tr>
<?php }} else { ?>

	<tr class="danger-color">
		<td colspan="3"><strong><?php echo ((isset($this->_rootref['L_NO_MEMBERS'])) ? $this->_rootref['L_NO_MEMBERS'] : ((isset($user->lang['NO_MEMBERS'])) ? $user->lang['NO_MEMBERS'] : '{ NO_MEMBERS }')); ?></strong></td>
	</tr>
<?php } ?>

	</tbody>
	</table>
	
<?php }} ?>


</form>

<?php $this->_tpl_include('jumpbox.html'); $this->_tpl_include('overall_footer.html'); ?>