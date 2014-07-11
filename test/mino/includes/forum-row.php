<li class="forum-row grid-row">
    <dl class="forum-row-wrap">
        <dt class="forum-header grid-m-6 grid-l-7 grid-w-8">
            <h2 class="forum-title h5"><?php echo $status; ?><a href="#"><?php echo $title; ?></a><?php echo $label; ?></h2>
            <dfn class="forum-description"><?php echo $desc; ?></dfn>
        </dt>
        <dd class="forum-details details grid-m-6 grid-l-5 grid-w-4">
            <div class="details-stats label-group pull-left">
                <p class="forum-stat"><dfn class="hidden-s">Topics: </dfn><b><?php echo $topics; ?></b></p>
                <p class="forum-stat"><dfn class="hidden-s">Replies: </dfn><b><?php echo $posts; ?></b></p>
            </div>
            <div class="details-recent pull-left hidden-s">
                <img class="details-avatar img-circle pull-left" src="<?php echo $avatar; ?>" alt="" />
                <dl class="details-info pull-left">
                    <dt class="details-user"><a class="<?php echo $usertype; ?>" href="#"><?php echo $user; ?></a></dt>
                    <dd class="details-time"><time><?php echo $time; ?></time></dd>
                </dl>
            </div>
        </dd>
    </dl>
</li>
