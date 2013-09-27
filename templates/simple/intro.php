		<div class="container">
            <header>
                <div class="row">
                    <div class="span3">
                        <a class="branding" href="#"><img src="<?php echo $template_dir_url ?>/img/branding.png" width="48px" height="48px"><?=$blog_title?></a>
                    </div>
                    <div class="span9">
                        <nav class="pull-right">
                            <ul>
                                <li<?php if($filename==NULL) then echo 'class="current"'; ?>><a href=""><i class="icon-home"></i> Home</a></li>
                                <li<?php if($filename=='about') then echo 'class="current"'; ?>><a href="about"><i class="icon-vcard"></i> About</a></li>
                                <li<?php if($filename=='contact') then echo 'class="current"'; ?>>><a href="contact"><i class="icon-envelope-alt"></i> Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <hgroup>
                    <h1>
                        <?=$page_title;?>
                        <small>
                            <?=$page_tag;?>
                        </small>
                    </h1>
                </hgroup>
            </header>
        </div>