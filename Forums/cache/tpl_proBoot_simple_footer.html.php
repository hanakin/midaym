<?php if (!defined('IN_PHPBB')) exit; ?></div>

	<div class="copyright">Powered by <a href="http://www.phpbb.com/">phpBB</a>&reg; Forum Software &copy; phpBB Group
		<?php if ($this->_rootref['TRANSLATION_INFO']) {  ?><br /><?php echo (isset($this->_rootref['TRANSLATION_INFO'])) ? $this->_rootref['TRANSLATION_INFO'] : ''; } if ($this->_rootref['DEBUG_OUTPUT']) {  ?><br /><?php echo (isset($this->_rootref['DEBUG_OUTPUT'])) ? $this->_rootref['DEBUG_OUTPUT'] : ''; } ?>

	</div>
</div>

<!-- Dev mode
script type="text/javascript" src="<?php echo (isset($this->_rootref['T_ASSETS_PATH'])) ? $this->_rootref['T_ASSETS_PATH'] : ''; ?>/javascript/jquery.js" type="text/javascript"></script> 
-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/bootstrap.min.js"></script>

</body>
</html>