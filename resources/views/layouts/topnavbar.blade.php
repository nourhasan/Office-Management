<div class="row border-bottom">
    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" method="post" action="">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="myInput" id="myInput">
                </div>
            </form>
        </div>
        <ul class="nav navbar-top-links navbar-right">
    
            <li class="dropdown">
                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="/Admin/Messages">
                    <i class="fa fa-envelope"></i>
                    <span class="label label-warning" id="mc" name="mc"></span>
                </a>
                <ul class="dropdown-menu dropdown-messages">
                    <li>
                        <div class="dropdown-messages-box">
                            <div class="media-body" id="mb" name="mb"></div>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <div class="text-center link-block">
                            <a href="/Admin/Messages">
                                <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                            </a>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="/Admin/Notifications">
                    <i class="fa fa-bell"></i>  <span class="label label-primary" id="unseen"></span>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="/Admin/Notifications">
                            <div>
                                <i class="fa fa-envelope fa-fw"></i> <span id="notification"></span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <div class="text-center link-block">
                            <a href="/Admin/Notifications">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </li>
            <li>
                <a href="/logout">
                    <i class="fa fa-sign-out"></i> Log out
                </a>
            </li>
            <li>
                <a class="right-sidebar-toggle">
                    <i class="fa fa-tasks"></i>
                </a>
            </li>
        </ul>
    </nav>
</div>