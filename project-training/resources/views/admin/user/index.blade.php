@extends('layouts.index')

@section('content')
    <section class="content-header">
        <h1>
            Users
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">User</li>
        </ol>
    </section>
    <section class="content">
        <div class="wrapper row-offcanvas row-offcanvas-left">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Data Table</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <a type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-success" href="{{asset(('admin/user/create'))}}">+
                                    </a>
                                    <br>
                                    <br>
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Position</th>
                                            <th>Total Posts</th>
                                            <th>Time Created</th>
                                            <th>Time Updated</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $index => $user)
                                        <tr>
                                            <td>{{$user['id']}}</td>
                                            <td>{{$user['name']}}</td>
                                            <td>{{$user['email']}}</td>
                                            @if($user['role']==1)
                                                <td>Super Admin</td>
                                            @else
                                                <td>User Normal</td>
                                            @endif
                                            <td>{{$user['posts_count']}}</td>
                                            <td>{{$user['created_at']}}</td>
                                            <td>{{$user['updated_at']}}</td>
                                            <td class="pmd-table-row-action">
                                                <div >
                                                    {{-- Edit button --}}

                                                    <a href="{{ asset('admin/user/'.$user['id']) }}" method="get" class="btn-sm btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-info">
                                                        <i class="material-icons md-dark pmd-xs"><i class="fa fa-edit"></i></i>
                                                    </a>
                                                    {{-- Delete form --}}
                                                    <form action="{{ url('/admin/user/delete/'.$user['id']) }}" method="get">
                                                        <button type="submit"  onclick="return confirm('Bạn có chắc chắn muốn xóa mục này ?')" class=" btn-sm btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-danger">
                                                                <i class="material-icons md-dark pmd-xs"><i class="fa fa-trash-o"></i></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
        </div><!-- ./wrapper -->
    </section>

@endsection
