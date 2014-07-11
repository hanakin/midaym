            <section class="<?php echo $post_class." ".$post_status; ?>">
                <div class="grid">
                    <div class="row">
                        <aside class="post-featured hidden-s hidden-m grid-m-12 grid-l-4">
                            <?php if($post_image) { ?>
                            <img class="featured" src="<?php echo $post_image ?>" alt="<?php echo $post_title ?>" />
                            <?php }else{ ?>
                            <img class="featured" src="<?php echo $template_dir_url ?>assets/img/post-img-default.jpg" alt="<?php echo $post_title ?>" />
                            <?php } ?>
                        </aside>
                        <article class="post post-even grid-s-12 grid-m-12 grid-l-push-1 grid-l-7">
                            <p class="post-date">
                                <span class="post-day"><?php echo $published_month ?><br /><?php echo $published_day ?></span>
                            </p>
                            <h2 class="post-title"><?php echo $post_title ?></h2>
                            <?php echo $post_intro ?>
                            <a href="<?php echo $post_link ?>" class="btn">Finish Reading!</a>
                            <aside class="post-featured visible-m grid-m-12">
                                <?php if($post_image) { ?>
		        				<img class="featured" src="<?php echo $post_image ?>" alt="<?php echo $post_title ?>" />
								<?php }else{ ?>
								<img class="featured" src="<?php echo $template_dir_url ?>assets/img/post-img-default.jpg" alt="<?php echo $post_title ?>" />
								<?php } ?>
                            </aside>
                        </article>
                    </div>
                </div>
            </section>