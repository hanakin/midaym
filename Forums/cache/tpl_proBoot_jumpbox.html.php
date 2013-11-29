<?php if (!defined('IN_PHPBB')) exit; if ($this->_rootref['S_VIEWTOPIC']) {  ?>

<div class="row-fluid">
<div class="span6">
	<div class="span6"><a href="<?php echo (isset($this->_rootref['U_VIEW_FORUM'])) ? $this->_rootref['U_VIEW_FORUM'] : ''; ?>" class="btn" accesskey="r"><?php echo ((isset($this->_rootref['L_RETURN_TO'])) ? $this->_rootref['L_RETURN_TO'] : ((isset($user->lang['RETURN_TO'])) ? $user->lang['RETURN_TO'] : '{ RETURN_TO }')); ?> <?php echo (isset($this->_rootref['FORUM_NAME'])) ? $this->_rootref['FORUM_NAME'] : ''; ?></a></div>
</div>
<?php } else if ($this->_rootref['S_VIEWFORUM']) {  ?>

<div class="row-fluid">
<div class="span6">
	<div class="span6"><a href="<?php echo (isset($this->_rootref['U_INDEX'])) ? $this->_rootref['U_INDEX'] : ''; ?>" class="btn" accesskey="r"><?php echo ((isset($this->_rootref['L_RETURN_TO'])) ? $this->_rootref['L_RETURN_TO'] : ((isset($user->lang['RETURN_TO'])) ? $user->lang['RETURN_TO'] : '{ RETURN_TO }')); ?> <?php echo ((isset($this->_rootref['L_INDEX'])) ? $this->_rootref['L_INDEX'] : ((isset($user->lang['INDEX'])) ? $user->lang['INDEX'] : '{ INDEX }')); ?></a></div>
	</div>
<?php } else if ($this->_rootref['SEARCH_TOPIC']) {  ?>

<div class="row-fluid">
<div class="span6">
	<div class="span6"><a class="btn" href="<?php echo (isset($this->_rootref['U_SEARCH_TOPIC'])) ? $this->_rootref['U_SEARCH_TOPIC'] : ''; ?>" accesskey="r"><?php echo ((isset($this->_rootref['L_RETURN_TO'])) ? $this->_rootref['L_RETURN_TO'] : ((isset($user->lang['RETURN_TO'])) ? $user->lang['RETURN_TO'] : '{ RETURN_TO }')); ?>: <?php echo (isset($this->_rootref['SEARCH_TOPIC'])) ? $this->_rootref['SEARCH_TOPIC'] : ''; ?></a></div>
	</div>
<?php } else if ($this->_rootref['S_SEARCH_ACTION']) {  ?>

<div class="row-fluid">
<div class="span6">
	<div class="span6"><a class="btn" href="<?php echo (isset($this->_rootref['U_SEARCH'])) ? $this->_rootref['U_SEARCH'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_SEARCH_ADV'])) ? $this->_rootref['L_SEARCH_ADV'] : ((isset($user->lang['SEARCH_ADV'])) ? $user->lang['SEARCH_ADV'] : '{ SEARCH_ADV }')); ?>" accesskey="r"><?php echo ((isset($this->_rootref['L_RETURN_TO_SEARCH_ADV'])) ? $this->_rootref['L_RETURN_TO_SEARCH_ADV'] : ((isset($user->lang['RETURN_TO_SEARCH_ADV'])) ? $user->lang['RETURN_TO_SEARCH_ADV'] : '{ RETURN_TO_SEARCH_ADV }')); ?></a></div>
	</div>
	<?php } else { ?>

	<div class="row-fluid">
<div class="span6">
	<div class="span6"><span class="label"><?php echo (isset($this->_rootref['LAST_VISIT_DATE'])) ? $this->_rootref['LAST_VISIT_DATE'] : ''; ?></span></div>
	</div>
<?php } if ($this->_rootref['S_DISPLAY_JUMPBOX']) {  ?>

<div class="span6">
	<form method="post" id="jumpbox" action="<?php echo (isset($this->_rootref['S_JUMPBOX_ACTION'])) ? $this->_rootref['S_JUMPBOX_ACTION'] : ''; ?>" onsubmit="if(this.f.value == -1){return false;}" style="margin:0;">

	<?php if ($this->_tpldata['DEFINE']['.']['CUSTOM_FIELDSET_CLASS']) {  ?>

		<fieldset class="<?php echo (isset($this->_tpldata['DEFINE']['.']['CUSTOM_FIELDSET_CLASS'])) ? $this->_tpldata['DEFINE']['.']['CUSTOM_FIELDSET_CLASS'] : ''; ?>">
	<?php } else { ?>

		<fieldset class="jumpbox">
	<?php } ?>

			<label for="f" accesskey="j"><?php if ($this->_rootref['S_IN_MCP'] && $this->_rootref['S_MERGE_SELECT']) {  echo ((isset($this->_rootref['L_SELECT_TOPICS_FROM'])) ? $this->_rootref['L_SELECT_TOPICS_FROM'] : ((isset($user->lang['SELECT_TOPICS_FROM'])) ? $user->lang['SELECT_TOPICS_FROM'] : '{ SELECT_TOPICS_FROM }')); } else if ($this->_rootref['S_IN_MCP']) {  echo ((isset($this->_rootref['L_MODERATE_FORUM'])) ? $this->_rootref['L_MODERATE_FORUM'] : ((isset($user->lang['MODERATE_FORUM'])) ? $user->lang['MODERATE_FORUM'] : '{ MODERATE_FORUM }')); } else { echo ((isset($this->_rootref['L_JUMP_TO'])) ? $this->_rootref['L_JUMP_TO'] : ((isset($user->lang['JUMP_TO'])) ? $user->lang['JUMP_TO'] : '{ JUMP_TO }')); } ?>:</label>
			<select style="margin:0;" name="f" id="f" onchange="if(this.options[this.selectedIndex].value != -1){ document.forms['jumpbox'].submit() }">
			<?php $_jumpbox_forums_count = (isset($this->_tpldata['jumpbox_forums'])) ? sizeof($this->_tpldata['jumpbox_forums']) : 0;if ($_jumpbox_forums_count) {for ($_jumpbox_forums_i = 0; $_jumpbox_forums_i < $_jumpbox_forums_count; ++$_jumpbox_forums_i){$_jumpbox_forums_val = &$this->_tpldata['jumpbox_forums'][$_jumpbox_forums_i]; if ($_jumpbox_forums_val['S_FORUM_COUNT'] == (1)) {  ?><option value="-1">------------------</option><?php } ?>

				<option value="<?php echo $_jumpbox_forums_val['FORUM_ID']; ?>"<?php echo $_jumpbox_forums_val['SELECTED']; ?>><?php $_level_count = (isset($_jumpbox_forums_val['level'])) ? sizeof($_jumpbox_forums_val['level']) : 0;if ($_level_count) {for ($_level_i = 0; $_level_i < $_level_count; ++$_level_i){$_level_val = &$_jumpbox_forums_val['level'][$_level_i]; ?>&nbsp; &nbsp;<?php }} echo $_jumpbox_forums_val['FORUM_NAME']; ?></option>
			<?php }} ?>

			</select>
			<input class="btn" type="submit" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" />
		</fieldset>
	</form>
</div>
<?php } else { ?>

	<div class="span6"><span class="label pull-right"><?php echo (isset($this->_rootref['CURRENT_TIME'])) ? $this->_rootref['CURRENT_TIME'] : ''; ?></span></div>
<?php } ?>




</div>