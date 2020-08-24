@extends('layouts.index')

@section('content')
    <section class="content-header">
        <h1>
            Post
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Post</li>
        </ol>
    </section>
    <section class="content">
        <a type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-success" href="{{asset('admin/post/create')}}">+
        </a>
        <br>
        <table id="example" class="display" width="100%">
        <thead>
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Author</th>
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
                    "url": "admin/post/get-json",
                    "type": "GET"
                },
                "columns": [
                    {"data": "title"},
                    {"data": "content"},
                    {"data": "author.name"},
                    {"data": null, "render": function (data) {
                        return "<a class= 'btn-sm btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-info' a href='/admin/post/" + data.id + "'" + "><i class='fa fa-edit'></i></a>" +
                            "<a class='btn-sm btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-danger' onclick='return confirm(\"Are you sure?\")' style='margin-left: 20px' href='/admin/post/delete/" + data.id + "'" + "><i class='fa fa-trash-o'></i></a>"
                        }},
                ],
            });
        });
    </script>
@endsection
