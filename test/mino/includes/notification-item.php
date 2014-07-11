<li class="notification-item details">
    <div class="details-stats pull-left">
        <p class="notification-topic"><?php echo $title; ?></p>
        <?php echo $status; ?>
    </div>
    <div class="details-recent pull-left">
        <img class="details-avatar img-circle pull-left" src="<?php echo $avatar; ?>" alt="" />
        <dl class="details-info pull-left">
            <dt class="details-user"><a class="<?php echo $usertype; ?>" href="#"><?php echo $user; ?></a></dt>
            <dd class="details-time"><time><?php echo $time; ?></time></dd>
        </dl>
    </div>
</li>