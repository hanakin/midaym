        <section class="single white">
            <div class="grid">
                <div class="grid-row">
                    <article class="post grid-s-12">
                        <div class="single-date grid-s-12 grid-m-4 grid-l-3">
                            <p class="post-date">
                                <span class="post-day"><?php echo $published_month; ?><br /><?php echo $published_day; ?></span>
                            </p>
                            <a class="btn" href="<?php echo $blog_url ?>/archives"><i class="icon icon-cloud"></i></a>
                        </div>
                        <?php echo $post ?>
                    </article>
                </div>
            </div>
        </section>
        <section class="social">
            <div class="grid">
                <div class="grid-row">
                    <p class="social-logo grid-s-12 grid-m-1"><i class="icon icon-like pull-left"></i> <span class="visible-s">Share<span></p>
                    <ul class="social-menu grid-s-12 grid-m-11 list-inline">
                        <li class="text-center"><a class="btn btn-delicious btn-clear" href="https://delicious.com/post?url=<?php echo $post_link; ?>&title=<?php echo $post_title; ?>" data-dnt="true"><i class="icon icon-delicious2"></i> Share</a></li>
                        <li class="text-center"><a class="btn btn-facebook btn-clear" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $post_link; ?>&title=<?php echo $post_title; ?>" data-dnt="true"><i class="icon icon-facebook2"></i> Share</a></li>
                        <li class="text-center"><a class="btn btn-gplus btn-clear" href="https://plus.google.com/share?url=<?php echo $post_link; ?>&title=<?php echo $post_title; ?>" data-dnt="true"><i class="icon icon-gplus2"></i>  Share</a></li>
                        <li class="text-center"><a class="btn btn-linkedin btn-clear" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $post_link; ?>&title=<?php echo $post_title; ?>" data-dnt="true"><i class="icon icon-linkedin2"></i>  Share</a></li>
                        <li class="text-center"><a class="btn btn-reddit btn-clear" href="http://www.reddit.com/submit?url=<?php echo $post_link; ?>&title=<?php echo $post_title; ?>" data-dnt="true"><i class="icon icon-reddit2"></i>  Share</a></li>
                        <li class="text-center"><a class="btn btn-digg btn-clear" href="http://www.digg.com/submit?url=<?php echo $post_link; ?>&title=<?php echo $post_title; ?>" data-dnt="true"><i class="icon icon-digg2"></i> Digg</a></li>
                        <li class="text-center"><a class="btn btn-pinterest btn-clear" href="http://pinterest.com/pin/create/button/?url=<?php echo $post_link; ?>&title=<?php echo $post_title; ?>" data-dnt="true"><i class="icon icon-pinterest2"></i> Pin</a></li>
                        <li class="text-center"><a class="btn btn-twitter btn-clear" href="https://twitter.com/intent/tweet?url=<?php echo $post_link; ?>&title=<?php echo $post_title; ?>" data-dnt="true"><i class="icon icon-twitter2"></i> Tweet</a></li>
                        <script>
                            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
                        </script>
                    </ul>
                </div>
            </div>
        </section>