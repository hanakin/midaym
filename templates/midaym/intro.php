		<div class="container">
            <header>
                <div class="row">
                    <div class="span3">
                        <a class="branding" href="<?php echo $blog_url ?>"><img src="<?php echo $template_dir_url ?>/img/branding.png" width="48px" height="48px"><? echo $blog_title?></a>
                    </div>
                    <div class="span9">
                        <nav class="pull-right">
                            <ul>
								<?php if($filename==NULL) { ?>
	                            <li class="active">
	                            <?php } else { ?>
	                            <li>
	                            <?php } ?>
                                	<a href="<?php echo $blog_url ?>" title="Home"><i class="icon-home"></i> <span>Home</span></a></li>
                                <?php if($filename=='about') { ?>
	                            <li class="active">
	                            <?php } else { ?>
	                            <li>
	                            <?php } ?>
                                	<a href="<?php echo $blog_url ?>/about" title="About"><i class="icon-vcard"></i> <span>About</span></a></li>
                                <?php if($filename=='contact') { ?>
	                            <li class="active">
	                            <?php } else { ?>
	                            <li>
	                            <?php } ?>
                                	<a href="<?php echo $blog_url ?>/contact" title="Contact"><i class="icon-envelope-alt"></i> <span>Contact</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <hgroup>
                    <h1>
                        <? echo $page_title;?>
                        <small>
                            <? echo $page_tag;?>
                        </small>
                    </h1>
                </hgroup>
            </header>
        </div>