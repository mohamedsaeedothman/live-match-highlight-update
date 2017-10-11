<aside class="main-sidebar" >
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            @if(\Illuminate\Support\Facades\Auth::user()->type == \App\Services\Roles::$admin)
            <li class=" treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>Moderators</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li ><a href="{{\Illuminate\Support\Facades\URL::to('dashboard/moderators')}}"><i class="fa fa-list"></i> List All Moderators </a></li>
                    <li><a href="{{\Illuminate\Support\Facades\URL::to('dashboard/moderators/create')}}"><i class="fa fa-plus"></i> Add New Moderator </a></li>
                </ul>
            </li>
            @endif

            <li class=" treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>Teams</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li ><a href="{{\Illuminate\Support\Facades\URL::to('dashboard/teams')}}"><i class="fa fa-list"></i> List All Moderators </a></li>
                    <li><a href="{{\Illuminate\Support\Facades\URL::to('dashboard/teams/create')}}"><i class="fa fa-plus"></i> Add New Moderator </a></li>
                </ul>
            </li>

            <li class=" treeview">
                <a href="#">
                    <i class="fa fa-gamepad"></i> <span>Matches</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li ><a href="{{\Illuminate\Support\Facades\URL::to('dashboard/matches')}}"><i class="fa fa-list"></i> List All Matches </a></li>
                    <li><a href="{{\Illuminate\Support\Facades\URL::to('dashboard/matches/create')}}"><i class="fa fa-plus"></i> Add New Match </a></li>
                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
