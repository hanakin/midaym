<ul class="notification-sub dropdown-menu list-unstyled">
    <li>
        <span class="navbar-nav-sub-arrow octicons octicons-triangle-up"></span>
        <span class="pull-left">Notifications</span>
        <a class="pull-right" href="#" title="Settings" data-toogle="tooltip" data-placement="bottom" data-container=".navbar"><span class="octicons octicons-settings"></span> <span>Settings</span></a>
    </li>
    <?php
        $status = '<p class="notification-status"><span class="label quoted">QUOTED</span></p>';
        $title = '<a href="" title="[RFC|Merged] Notification box">[RFC|Merged] notification box</a>';
        $avatar = 'assets/img/user.png';
        $usertype = 'user';
        $user = 'bojangles';
        $time = 'Today, 01:00 PM';
    ?>
    <?php include("includes/notification-item.php"); ?>

    <?php
        $status = '<p class="notification-status"><span class="label replied">REPLIED</span></p>';
        $title = '<a href="" title="[RFC|Merged] Attachments management">[RFC|Merged] Attachments management </a>';
        $avatar = 'http://www.gravatar.com/avatar/' . md5(strtolower(trim("midaym@gmail.com")));
        $usertype = 'admin';
        $user = 'hanakin';
        $time = 'April, 15';
    ?>
    <?php include("includes/notification-item.php"); ?>

    <?php
        $status = '<p class="notification-status"><span class="label approved">APPROVED</span></p>';
        $title = '<a href="" title="[RFC|Merged] Allow Integration With Main Web Site">[RFC|Merged] Allow Integration With Main Web Site</a>';
        $avatar = 'assets/img/user.png';
        $usertype = 'user';
        $user = 'bojangles';
        $time = 'Today, 07:45 PM';
    ?>
    <?php include("includes/notification-item.php"); ?>

    <?php
        $status = '<p class="notification-status"><span class="label approve">AWAITING APPROVAL</span></p>';
        $title = '<a href="" title="[RFC|Merged] Allow Integration With Main Web Site">[RFC|Merged] Allow Integration With Main Web Site</a>';
        $avatar = 'assets/img/user.png';
        $usertype = 'user';
        $user = 'bojangles';
        $time = 'Today, 07:45 PM';
    ?>
    <?php include("includes/notification-item.php"); ?>

    <?php
        $status = '<p class="notification-status"><span class="label rejected">REJECTED</span></p>';
        $title = '<a href="" title="[RFC] Bigger topic title lenght limit">[RFC] Bigger topic title lenght limit</a>';
        $avatar = 'assets/img/user.png';
        $usertype = 'mod';
        $user = 'JonnyB';
        $time = 'Sun Jan 12, 2014 8:27 pm';
    ?>
    <?php include("includes/notification-item.php"); ?>

    <?php
        $status = '<p class="notification-status"><span class="label reported">REPORTED</span></p>';
        $title = '<a href="" title="[RFC] Bigger topic title lenght limit">[RFC] Bigger topic title lenght limit</a>';
        $avatar = 'assets/img/user.png';
        $usertype = 'mod';
        $user = 'JonnyB';
        $time = 'Sun Jan 12, 2014 8:27 pm';
    ?>
    <?php include("includes/notification-item.php"); ?>

    <?php
        $status = '<p class="notification-status"><span class="label created">CREATED</span></p>';
        $title = '<a href="" title="Responsive layout ">Responsive layout </a> in <a href="" title="[3.1/Ascraeus] Merged RFCs">[3.1/Ascraeus] Merged RFCs"</a>';
        $avatar = 'assets/img/user.png';
        $usertype = 'user';
        $user = 'bojangles';
        $time = '22 mins ago';
    ?>
    <?php include("includes/notification-item.php"); ?>

    <?php
        $status = '<p class="notification-status"><span class="label pmed">NEW MESSAGE</span></p>';
        $title = '<a href="">Test Msg!</a>';
        $avatar = 'assets/img/user.png';
        $usertype = 'mod';
        $user = 'JonnyB';
        $time = 'Sun Mar 30, 2012 8:27 pm';
    ?>
    <?php include("includes/notification-item.php"); ?>
    <li class="notification-more"><a href="#" title="See All" data-toogle="tooltip" data-placement="bottom" data-container=".navbar"><span class="octicons octicons-chevron-down"></span> <span>See All</span></a></li>
</ul>