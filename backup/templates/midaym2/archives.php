                	




                    <?php if($year=='') { ?>
					<h4><?php echo $published_year; ?></h4>
                    <ul class="list-unstyled post-list grid-s-12">
                        <li>
                            <a class="row" href="<?php echo $post_link; ?>" title="">
                                <span class="grid-s-3">
                                    <span class="post-day"><?php echo $published_month; ?><br /><?php echo $published_day; ?></span>
                                </span>
                                <span class="post-title grid-s-9">
                                    <?php echo $post_title ?>
                                </span>
                            </a>
                        </li>

                    <?php } elseif($year==$published_year) { ?>
                        <li>
                            <a class="row" href="<?php echo $post_link; ?>" title="">
                                <span class="grid-s-3">
                                    <span class="post-day"><?php echo $published_month; ?><br /><?php echo $published_day; ?></span>
                                </span>
                                <span class="post-title grid-s-9">
                                    <?php echo $post_title ?>
                                </span>
                            </a>
                        </li>
                    <?php } elseif($year!=$published_year) { ?>
                	</ul>

                	<h4><?php echo $published_year; ?></h4>
                    <ul class="list-unstyled post-list grid-s-12">
                        <li>
                            <a class="row" href="<?php echo $post_link; ?>" title="">
                                <span class="grid-s-3">
                                    <span class="post-day"><?php echo $published_month; ?><br /><?php echo $published_day; ?></span>
                                </span>
                                <span class="post-title grid-s-9">
                                    <?php echo $post_title ?>
                                </span>
                            </a>
                        </li>
                    <?php } ?>

                    