<header class="main-header">
    <!-- Logo -->

    <a href="{{\Illuminate\Support\Facades\URL::to('/dashboard')}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Live Match </b>highlights</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="hidden-xs">                {{\Illuminate\Support\Facades\Auth::user()->full_name}}
</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->


                        <li class="">

                            <div class="pull-right">
                                <a href="{{\Illuminate\Support\Facades\URL::to('/dashboard/logout')}}" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>

                <!-- Control Sidebar Toggle Button -->

            </ul>
        </div>
    </nav>
</header>
