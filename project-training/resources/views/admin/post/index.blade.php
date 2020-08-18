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
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Data Table</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body table-responsive">
                            <button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-success" action="#">+
                            </button>
                            <br>
                            <br>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name Book</th>
                                    <th>Content</th>
                                    <th>Author</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $index => $post)
                                    <tr>
                                        <td>{{$post['id']}}</td>
                                        <td>{{$post['title']}}</td>
                                        <td>{{$post['content']}}</td>
                                        <td>{{$post['author']->name}}</td>
                                        <td class="pmd-table-row-action">
                                            <div >
                                                {{-- Edit button --}}
                                                <a class="btn-sm btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-info">
                                                    <i class="material-icons md-dark pmd-xs"><i class="fa fa-edit"></i></i>
                                                </a>

                                                {{-- Delete form --}}
                                                <a class=" btn-sm btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-danger">
                                                    <i class="material-icons md-dark pmd-xs"><i class="fa fa-trash-o"></i></i>
                                                </a>
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

