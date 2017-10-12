<aside class="main-sidebar" >
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>                                {{\Illuminate\Support\Facades\Auth::user()->getFullNameAttribute()}}
                </p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            @if(\Illuminate\Support\Facades\Auth::user()->type == \App\Services\Roles::$admin)
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>Moderators</span>

                </a>
                <ul class="treeview-menu">
                    <li ><a href="{{\Illuminate\Support\Facades\URL::to('dashboard/moderators')}}"><i class="fa fa-list"></i> List All Moderators </a></li>
                    <li><a href="{{\Illuminate\Support\Facades\URL::to('dashboard/moderators/create')}}"><i class="fa fa-plus"></i> Add New Moderator </a></li>
                </ul>
            </li>
            @endif

            <li class=" active treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>Teams</span>

                </a>
                <ul class=" treeview-menu">
                    <li ><a href="{{\Illuminate\Support\Facades\URL::to('dashboard/teams')}}"><i class="fa fa-list"></i> List All Teams </a></li>
                    <li><a href="{{\Illuminate\Support\Facades\URL::to('dashboard/teams/create')}}"><i class="fa fa-plus"></i> Add New Moderator </a></li>
                </ul>
            </li>

            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-gamepad"></i> <span>Matches</span>

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
