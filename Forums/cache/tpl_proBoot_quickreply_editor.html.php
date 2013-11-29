<?php if (!defined('IN_PHPBB')) exit; ?><form method="post" action="<?php echo (isset($this->_rootref['U_QR_ACTION'])) ? $this->_rootref['U_QR_ACTION'] : ''; ?>">
		<div class="row-fluid panel" id="qr_ns_editor_div">
			<div class="well">
					<h3 class="box-heading"><?php echo ((isset($this->_rootref['L_QUICKREPLY'])) ? $this->_rootref['L_QUICKREPLY'] : ((isset($user->lang['QUICKREPLY'])) ? $user->lang['QUICKREPLY'] : '{ QUICKREPLY }')); ?></h3>
					<fieldset class="fields1">
					
						<tr style="clear: left;">
							<td><label for="subject"><?php echo ((isset($this->_rootref['L_SUBJECT'])) ? $this->_rootref['L_SUBJECT'] : ((isset($user->lang['SUBJECT'])) ? $user->lang['SUBJECT'] : '{ SUBJECT }')); ?>:</label></td>
							<td><input type="text" name="subject" id="subject-ns" size="45" maxlength="64" tabindex="2" value="<?php echo (isset($this->_rootref['SUBJECT'])) ? $this->_rootref['SUBJECT'] : ''; ?>" class="input-large" /></td>
						</tr>
					
					<tr id="message-box-ns">
						<td colspan="2"><textarea style="height: 9em;" name="message" rows="7" cols="76" tabindex="3" class="inputbox"></textarea></td>
					</tr>
					
					</fieldset>
					<fieldset class="submit-buttons">
						<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

						<?php echo (isset($this->_rootref['QR_HIDDEN_FIELDS'])) ? $this->_rootref['QR_HIDDEN_FIELDS'] : ''; ?>

						<input type="submit" accesskey="s" tabindex="6" name="post" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" class="btn btn-primary" />&nbsp;
						<input type="submit" accesskey="f" tabindex="7" name="full_editor" value="<?php echo ((isset($this->_rootref['L_FULL_EDITOR'])) ? $this->_rootref['L_FULL_EDITOR'] : ((isset($user->lang['FULL_EDITOR'])) ? $user->lang['FULL_EDITOR'] : '{ FULL_EDITOR }')); ?>" class="btn" />&nbsp;
					</fieldset>
			</div>
		</div>
	</form>