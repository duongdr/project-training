<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src={{asset("images/avatar.png")}} class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Hello, {{\Illuminate\Support\Facades\Auth::user()->name}}</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            @if(\Illuminate\Support\Facades\Auth::user()->role == 1)
                <li class="active">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-users"></i> <span>Users</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-folder"></i> <span>Posts</span>
                    </a>
                </li>
            @else
                <li>
                    <a href="#">
                        <i class="fa fa-folder"></i> <span>Posts</span>
                    </a>
                </li>
            @endif
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
