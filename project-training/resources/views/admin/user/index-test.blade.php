@extends('layouts.index')

@section('content')
    <section class="content-header">
        <h1>
            User
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">User</li>
        </ol>
    </section>
    <section class="content">
        <a type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-success" href="{{asset('admin/user/create')}}">+
        </a>
        <br>
        <table id="example" class="display" width="100%">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Total Posts</th>
{{--            <th>Time Created</th>--}}
{{--            <th>Time Updated</th>--}}
            <th>Action</th>
        </tr>
        </thead>
        </table>
    </section>
    <section class="content">
    </section>

@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#example').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "admin/user/get-json",
                    "type": "GET"
                },
                "columns": [
                    {"data": "name"},
                    {"data": "email"},
                    {"data": "posts_count"},
                    // {"data": "created_at"},
                    // {"data": "updated_at"},
                    {"data": null, "render": function (data) {
                        return "<a class= 'btn-sm btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-info' a href='/admin/user/" + data.id + "'" + "><i class='fa fa-edit'></i></a>" +
                            "<a class='btn-sm btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-danger' onclick='return confirm(\"Are you sure?\")' style='margin-left: 20px' href='/admin/user/delete/" + data.id + "'" + "><i class='fa fa-trash-o'></i></a>"
                        }},
                ],
            });
        });
    </script>
@endsection
