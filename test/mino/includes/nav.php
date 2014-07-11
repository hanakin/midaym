<header class="navbar">
    <div class="grid">
        <hgroup class="navbar-wrap grid-row visible-s">
            <nav class="navbar-nav visible-s">
                <ul class="list-inline">
                    <li class="navbar-nav-item grid-s-3 text-center">
                        <a class="pull-left sidenav-toggle" data-toogle="tooltip" data-placement="bottom" data-container=".navbar" href="#" title="Menu"><span class="badge">10</span> <span class="icon icon-reorder"></span> <span class="sr-only">Menu</span></a>
                    </li>
                    <li class="grid-s-6 text-center">
                        <a class="navbar-brand brand" href="/" title="PHPBB | Creating Communities"><img class="brand-logo" src="assets/img/logo.png" alt="PHPBB | Creating Communities"> <span class="sr-only">PHPBB</span></a>
                    </li>
                    <li class="navbar-nav-item grid-s-3 text-center"><a class="login-toggle pull-right" href="#" data-toogle="tooltip" data-placement="bottom" data-container=".navbar" title="Login"><span class="octicons octicons-log-in"></span> <span class="sr-only">Login</span></a></li>
                </ul>
            </nav>
        </hgroup>

        <hgroup class="navbar-wrap grid-row hidden-s">
            <a class="navbar-brand brand grid-m-3" href="/" title="PHPBB | Creating Communities"><img class="brand-logo" src="assets/img/logo.png" alt="PHPBB | Creating Communities"> <span class="sr-only">PHPBB</span></a>
            <nav class="navbar-nav grid-m-9">
                <ul class="list-inline pull-right">
                    <li class="navbar-nav-item"><a href="#" data-toogle="tooltip" data-placement="bottom" data-container=".navbar" title="Advanced Search"><span class="icon icon-cog"></span> <span class="sr-only">Advanced Search</span></a></li>
                    <!-- Settings & Tools -->
                    <li class="navbar-nav-item dropdown">
                        <a class="navbar-user dropdown-toggle" href="#" title="Settings & Tools"><img width="36" class="navbar-avatar img-circle pull-left" src="http://www.gravatar.com/avatar/<?php echo md5(strtolower(trim("midaym@gmail.com"))); ?>" alt="" /> <span class="pull-right">hanakin</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#" title="User Preferences">
                                    <span class="navbar-nav-sub-arrow octicons octicons-triangle-up"></span>
                                    <span class="icon icon-user"></span> <span>User Preferences</span>
                                </a>
                            </li>
                            <li><a href="#" title="Moderator Tools"><span class="icon icon-shield"></span> <span>Moderator Tools</span></a></li>
                            <li><a href="#" title="Admin Panel"><span class="icon icon-cogs"></span> <span>Admin Panel</span></a></li>
                        </ul>
                    </li>
                    <!-- Notifications -->
                    <li class="navbar-nav-item dropdown">
                        <a class="navbar-nav-dropdown notifications dropdown-toggle" data-toogle="tooltip" data-placement="bottom" data-container=".navbar" href="#" title="Notifications"><span class="badge">8</span> <span class="icon icon-bell"></span> <span class="sr-only">Notifications</span></a>
                        <?php include("includes/notifications.php"); ?>
                    </li>
                    <li class="navbar-nav-item"><a href="#" data-toogle="tooltip" data-placement="bottom" data-container=".navbar" title="Private Messages"><span class="badge">2</span> <span class="icon icon-inbox"></span> <span class="sr-only">PMs</span></a></li>
                    <!-- Forum Actions -->
                   <!--  <li class="navbar-nav-item dropdown">
                        <a class="navbar-nav-dropdown actions dropdown-toggle" data-toogle="tooltip" data-placement="bottom" data-container=".navbar" href="#" title="Forum Actions"><span class="icon icon-tasks"></span> <span class="sr-only">Forum Actions</span></a>
                        <ul class="navbar-nav-sub actions-sub dropdown-menu list-unstyled">
                            <li class="navbar-nav-sub-header">
                                <span class="navbar-nav-sub-arrow octicons octicons-triangle-up"></span>
                                <span class="octicons octicons-info"></span> <span>Forum Info</span>
                            </li>
                            <li><a href="#" title="Mark Forums Read"><span class="icon icon-check"></span> <span>Mark Forums Read</span></a></li>
                            <li class="navbar-nav-sub-header"><span class="icon icon-comments"></span> <span>Posts</span></li>
                            <li><a href="#" title="Yours"><span class="forum-icon mine"></span> <span>Yours</span></a></li>
                            <li><a href="#" title="Unanswered"><span class="forum-icon unanswered"></span> <span>Unanswered</span></a></li>
                            <li><a href="#" title="Unread"><span class="forum-icon"></span> <span>Unread</span></a></li>
                            <li><a href="#" title="New"><span class="forum-icon new"></span> <span>New</span></a></li>
                            <li><a href="#" title="Active"><span class="forum-icon hot"></span> <span>Active</span></a></li>
                        </ul>
                    </li> -->
                    <li class="navbar-nav-item"><a class="login-toggle" href="#" data-toogle="tooltip" data-placement="bottom" data-container=".navbar" title="Login"><span class="octicons octicons-log-in"></span> <span class="sr-only">Login</span></a></li>
                    <!-- <li class="navbar-nav-item"><a href="#" data-toogle="tooltip" data-placement="bottom" data-container=".navbar" title="Logout"><span class="octicons octicons-log-out"></span> <span class="sr-only">Logout</span></a></li> -->
                </ul>
                <form action="" class="form navbar-nav-search pull-right">
                    <input type="text" class="search form-control" placeholder="Search... " name="Search" title="Search" />
                </form>
            </nav>
        </hgroup>
    </div>
</header>

