<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="clear">
                        <span class="block m-t-xs">
                            <strong class="font-bold">{{ Session::get('name')}}</strong>
                        </span>
                        <span class="text-muted text-xs block">Admin Panel</span>
                    </span>
                    </a>
                </div>
            </li>

            @include('layouts.optionAdmin')
            
        </ul>   
    </div>
</nav>