        <header class="header intro">
            <section class="intro-nav grid">
                <!-- Mobile Nav -->
                <nav class="grid nav visible-s">
                    <ul class="list-inline grid-row">
                    <?php if($filename=='archives') { ?>
                        <li class="active grid-s-4 text-center"><i class="icon icon-cloud"></i></li>
                    <?php } else { ?>
                        <li class="grid-s-4 text-center">                   
                            <a href="<?php echo $blog_url ?>/archives" title="Archives"><i class="icon icon-cloud"></i></a>
                        </li>
                    <?php } ?>
                    <?php if($filename=='about') { ?>
                        <li class="active grid-s-4 text-center"><i class="icon icon-user"></i></li>
                    <?php } else { ?>
                        <li class="grid-s-4 text-center">
                            <a href="<?php echo $blog_url ?>/about" title="About"><i class="icon icon-user"></i></a>
                        </li>
                    <?php } ?>                            
                    <?php if($filename=='contact') { ?>
                        <li class="active grid-s-4 text-center"><i class="icon icon-mail"></i></li>
                    <?php } else { ?>
                        <li class="grid-s-4 text-center">
                            <li class="grid-s-4 text-center"><a href="<?php echo $blog_url ?>/contact" title="Contact"><i class="icon icon-mail"></i></a>
                        </li>
                    <?php } ?>
                    </ul>
                </nav>
                <!-- Brand -->
                <a class="intro-brand" href="<?php echo $blog_url ?>"><img src="<?php echo $template_dir_url ?>/assets/img/branding.png" width="48px" height="48px">MIDAYM</a>
                <!-- Normal Nav -->
                <nav class="nav pull-right hidden-s">
                    <ul class="list-inline">
                        <?php if($filename=='archives') { ?>
                        <li class="active"><i class="icon icon-cloud"></i></li>
                        <?php } else { ?>
                        <li>
                            <a href="<?php echo $blog_url ?>/archives" title="Archives"><i class="icon icon-cloud"></i></a>
                        </li>
                        <?php } ?>                            
                        <?php if($filename=='about') { ?>
                        <li class="active"><i class="icon icon-user"></i></li>
                        <?php } else { ?>
                        <li>
                            <a href="<?php echo $blog_url ?>/about" title="About"><i class="icon icon-user"></i></a>
                        </li>
                        <?php } ?>
                        <?php if($filename=='contact') { ?>
                        <li class="active"><i class="icon icon-mail"></i></li>
                        <?php } else { ?>
                        <li>
                            <a href="<?php echo $blog_url ?>/contact" title="Contact"><i class="icon icon-mail"></i></a>
                        </li>
                        <?php } ?>
                    </ul>
                </nav>
            </section>
            <hgroup class="grid">
                <h1 class="intro-lead">
                    <?php echo $page_title;?>
                    <small>
                        <?php echo $page_tag;?>
                    </small>
                </h1>
            </hgroup>
        </header>