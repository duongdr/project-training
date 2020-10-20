<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src={{asset("images/avatar.png")}} class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Hello, {{\Auth::user()->name}}</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            @if(\Auth::user()->role == 1)
                {{--                <li class="active">--}}
                <li>
                    <a href="{{asset('admin/home')}}">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{asset('admin/user')}}">
                        <i class="fa fa-users"></i> <span>Users</span>
                    </a>
                </li>
                <li>
                    <a href="{{asset('admin/post')}}">
                        <i class="fa fa-folder"></i> <span>Posts</span>
                    </a>
                </li>
                <li>
                    <a href="{{asset('admin/category')}}">
                        <i class="fa fa-dashboard"></i> <span>Category</span>
                    </a>
                </li>
            @else
                <li>
                    <a href="{{asset('user/home')}}">
                        <i class="fa fa-folder"></i> <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{asset('user/post')}}">
                        <i class="fa fa-folder"></i> <span>Posts</span>
                    </a>
                </li>
            @endif
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
